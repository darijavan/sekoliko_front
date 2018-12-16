<?php
/**
 * Created by PhpStorm.
 * User: Tahiana_Rakotonirina
 * Date: 11/11/2018
 * Time: 17:18
 */

namespace Bundle\AdminBundle\Repository;


use Bundle\AdminBundle\Entity\TzMatiereEntity;
use FOS\RestBundle\Request\ParamFetcher;

class TzMatiereRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * function de recherche de matiere
     * @param ParamFetcher $paramFetcher
     * @return array
     */
    public function search(ParamFetcher $paramFetcher) {
        $paramNom = $paramFetcher->get('nom');
        $paramCoeff = $paramFetcher->get('coeff');
        $paramClass = $paramFetcher->get('class');
        $paramProf = $paramFetcher->get('prof');
        $queryBuilder = $this->getEntityManager()
            ->getRepository(TzMatiereEntity::class)
            ->createQueryBuilder('m');
        if (!is_null($paramNom) && !empty($paramNom)) {
            $queryBuilder->andWhere(
                $queryBuilder->expr()->like('m.description',
                    $queryBuilder->expr()->literal('%' . $paramNom . '%'))
            );
        }
        if (!is_null($paramCoeff) && !empty($paramCoeff)) {
            $queryBuilder->andWhere(
                $queryBuilder->expr()->eq('m.coefficient', $paramCoeff)
            );
        }
        if (!is_null($paramClass) && !empty($paramClass)) {
            $queryBuilder->andWhere(
                $queryBuilder->expr()->eq('m.classe', $paramClass)
            );
        }
        if (!is_null($paramProf) && !empty($paramProf)) {
            $queryBuilder->andWhere(
                $queryBuilder->expr()->eq('m.ProfId', $paramProf)
            );
        }
            $etat = $queryBuilder->getQuery()->getResult();
        return $etat;
    }
}