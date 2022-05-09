<?php

namespace App\Repository;

use App\Entity\Upcomingevents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Upcomingevents|null find($id, $lockMode = null, $lockVersion = null)
 * @method Upcomingevents|null findOneBy(array $criteria, array $orderBy = null)
 * @method Upcomingevents[]    findAll()
 * @method Upcomingevents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UpcomingeventsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Upcomingevents::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Upcomingevents $entity, bool $flush = true): void
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
    public function remove(Upcomingevents $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Upcomingevents[] Returns an array of Upcomingevents objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Upcomingevents
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
