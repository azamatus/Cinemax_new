<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Aza
 * Date: 02.09.13
 * Time: 23:28
 * To change this template use File | Settings | File Templates.
 */

namespace Cinemax\CinemaxBundle\Entity;

use Doctrine\ORM\EntityRepository;


class DiscsRepository extends EntityRepository{

    public function getDiscsById($discsId){

        $em = $this->getEntityManager();
        $repository = $em->getRepository("CinemaxBundle:Discs");
        $qb = $repository->createQueryBuilder('r');
        $query = $qb->add('where', $qb->expr()->in('r.id', array_keys($discsId)))
            ->andWhere('r.active = 1')
            ->getQuery();

        return $query->getResult();
}

}