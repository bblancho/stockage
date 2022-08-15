<?php

namespace App\Controller;

use App\Entity\Document;
use App\Form\DocumentType;
use App\Repository\DocumentRepository;
use App\Repository\UserRepository;
use App\Service\EmailService;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Recherche;
use App\Form\RechercheType;
use App\Utils\Utils;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @IsGranted("IS_AUTHENTICATED_FULLY")
 */
#[Route('/document')]
class DocumentController extends AbstractController
{
    #[Route('/', name: 'app_document_index', methods: ['GET'])]
    public function index(DocumentRepository $documentRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $recherche = new Recherche();
        $form = $this->createForm (RechercheType::class, $recherche);
        $form->handleRequest ($request);

        $allPropertiesQuery = $documentRepository->findByElements ($recherche);
        $paginateProperties = $paginator->paginate(
            $allPropertiesQuery,
            $request->query->getInt('page', 1),
            Utils::$ITEMPERPAGE
        );

        return $this->render('document/index.html.twig', [
        'documents' => $paginateProperties,
        'form' => $form->createView ()
        ]);
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     * @throws \Symfony\Component\Mailer\Exception\TransportExceptionInterface
     */
    #[Route('/new', name: 'app_document_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DocumentRepository $documentRepository, TranslatorInterface $translator, UserRepository $userRepository, EmailService $emailService): Response
    {
        $document = new Document();
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $document->setUser($this->getUser());
            $documentRepository->add($document, true);

            $users = $userRepository->findAll();
            if(!empty($users))
            {
                foreach ($users as $user)
                {
                    $emailService->sendMail($user->getEmail(),$user->getPrenom());
                }
            }

            $this->addFlash('success', $translator->trans('document.created'));
            return $this->redirectToRoute('app_document_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('document/new.html.twig', [
            'document' => $document,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_document_show', methods: ['GET'])]
    public function show(Document $document): Response
    {
        return $this->render('document/show.html.twig', [
            'document' => $document,
        ]);
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    #[Route('/{id}/edit', name: 'app_document_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Document $document, DocumentRepository $documentRepository, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $documentRepository->add($document, true);
            $this->addFlash('success', $translator->trans('ducument.update'));
            return $this->redirectToRoute('app_document_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('document/edit.html.twig', [
            'document' => $document,
            'form' => $form,
        ]);
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    #[Route('/{id}', name: 'app_document_delete', methods: ['DELETE'])]
    public function delete(Request $request, Document $document, DocumentRepository $documentRepository, TranslatorInterface $translator): Response
    {
        if ($this->isCsrfTokenValid('delete'.$document->getId(), $request->request->get('_token'))) {
            $documentRepository->remove($document, true);
            $this->addFlash('success', $translator->trans('ducument.delete'));
        }

        return $this->redirectToRoute('app_document_index', [], Response::HTTP_SEE_OTHER);
    }
}
