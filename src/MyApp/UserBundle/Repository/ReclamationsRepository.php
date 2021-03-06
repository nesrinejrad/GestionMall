<?php

namespace MyApp\UserBundle\Repository;

/**
 * ReclamationsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReclamationsRepository extends \Doctrine\ORM\EntityRepository
{

    function  findRAjax($p)
    {
        $query=$this->getEntityManager()->createQuery(
            "select m from MyAppUserBundle:Reclamations m WHERE  m.titreRec LIKE :p"

        )->setParameter('p','%'.$p.'%');
        return $query->getResult();


    }
    function  findVAjax()
    {
        $query=$this->getEntityManager()->createQuery(
            "SELECT etatRec, COUNT(etatRec) as nb FROM MyAppUserBundle:Reclamations GROUP BY etatRec"

        );

        return $query->getResult();


    }

}
