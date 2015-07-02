<?php

namespace GAlter\GestionBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * rapportRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RapportRepository extends EntityRepository
{

    /**
     * verifier cette query pas comlete
     * @param $formation
     * @param $annee
     * @return array
     */
    public function getAllReportByFormationAnnee($formation, $annee){
        $queryBuilder=$this->createQueryBuilder('rapport');
           $queryBuilder->join('rapport.etudiant', 'etudiant')
                        ->join('etudiant.anneeFormationEtudiant', 'anneeFormationEtudiant')
                        ->where('anneeFormationEtudiant.annee =:annee')
                        ->andWhere('anneeFormationEtudiant.formation =:formation')
                        ->setParameters(array('formation'=> $formation, 'annee'=>$annee));
        return $queryBuilder->getQuery()->getResult();
    }
}
