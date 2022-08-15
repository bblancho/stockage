<?php

namespace App\Repository;

use App\Entity\Document;
use App\Entity\Recherche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Document|null find($id, $lockMode = null, $lockVersion = null)
 * @method Document|null findOneBy(array $criteria, array $orderBy = null)
 * @method Document[]    findAll()
 * @method Document[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Document::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Document $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Document $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findByElements(Recherche $recherche): Query
    {
        $query = $this->findByField();

        if ($recherche->getRecherche()) {
        $query
        ->where('p.titre LIKE :re')
        ->setParameter('re', '%' . $recherche->getRecherche() . '%');
        }

        return $query->getQuery();
    }

    public function findByField(): QueryBuilder
    {
        return $this->createQueryBuilder('p');
    }

}
