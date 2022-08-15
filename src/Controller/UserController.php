<?php

namespace App\Controller;

use App\Entity\Password;
use App\Entity\User;
use App\Form\ChangePassType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Recherche;
use App\Form\RechercheType;
use App\Utils\Utils;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @IsGranted("IS_AUTHENTICATED_FULLY")
 */
#[Route('/user')]
class UserController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     */
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $recherche = new Recherche();
        $form = $this->createForm (RechercheType::class, $recherche);
        $form->handleRequest ($request);

        $allPropertiesQuery = $userRepository->findByElements ($recherche);
        $paginateProperties = $paginator->paginate(
            $allPropertiesQuery,
            $request->query->getInt('page', 1),
            Utils::$ITEMPERPAGE
        );

        return $this->render('user/index.html.twig', [
        'users' => $paginateProperties,
        'form' => $form->createView ()
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     */
    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository, UserPasswordHasherInterface $hasher, TranslatorInterface $translator): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($hasher->hashPassword($user, $user->getPassword()));
            $userRepository->add($user, true);
            $this->addFlash('success', $translator->trans('user.created'));
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * @param Request $request
     * @param User $user
     * @param UserRepository $repository
     * @param UserPasswordHasherInterface $encoder
     * @param TranslatorInterface $translator
     * @return Response
     */
    #[Route('/{id}/newpass', name: 'app_edit_pass', methods: ['GET', 'POST'])]
    public function editPassword(Request $request, User $user,UserRepository $repository, UserPasswordHasherInterface $encoder, TranslatorInterface $translator): Response
    {
        $pass = new Password();
        $form = $this->createForm(ChangePassType::class, $pass);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $checkPass = $encoder->isPasswordValid($user, $pass->getOldPass());
            if ($checkPass === true) {
                $encodedPassword = $encoder->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                );

                $repository->upgradePassword($user, $encodedPassword);
                $this->addFlash('success', $translator->trans('pass.good.change'));

            } else {
                $this->addFlash('danger', $translator->trans('pass.not.correct'));
            }

            return $this->redirectToRoute('app_edit_pass', ['id' => $user->getId(),]);
        }

        return $this->render('user/pass.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     */
    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     */
    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository, UserPasswordHasherInterface $hasher, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($hasher->hashPassword($user, $user->getPassword()));
            $userRepository->add($user, true);
            $this->addFlash('success', $translator->trans('user.update'));
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     */
    #[Route('/{id}', name: 'app_user_delete', methods: ['DELETE'])]
    public function delete(Request $request, User $user, UserRepository $userRepository, TranslatorInterface $translator): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
            $this->addFlash('success', $translator->trans('user.delete'));
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
