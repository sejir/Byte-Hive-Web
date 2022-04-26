<?php

namespace App\Repository;

use App\Entity\ResAct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ResAct|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResAct|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResAct[]    findAll()
 * @method ResAct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResActRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResAct::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(ResAct $entity, bool $flush = true): void
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
    public function remove(ResAct $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return ResAct[] Returns an array of ResAct objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ResAct
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function countNbrePerso()
    {

        $qb = $this->createQueryBuilder('v')
            ->select('COUNT(v.idres) AS res_act, SUBSTRING(v.nbrePerso, 1, 10) AS e')
            ->groupBy('e');
        return $qb->getQuery()
            ->getResult();

    }
}
