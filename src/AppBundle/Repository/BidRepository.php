<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * AdvertRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdvertRepository extends EntityRepository
{
    public function ActiveAdverts($limit) {
        return $this
            ->createQueryBuilder('e')
            ->select('e')
            ->where('e.enabled <= :true')
            ->andWhere('e.expired = :false')
            ->setParameter('true',1)
            ->setParameter('false',0)
            ->orderBy('e.subscribeDate', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

}
