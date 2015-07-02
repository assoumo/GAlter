<?php

namespace GAlter\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
//use Symfony\Component\BrowserKit\Response;



class TestController extends Controller
{
    /**
     * @Route("/testannee")
     * @Template()
     */
    public function testanneeAction()
    {
        $rep=$this->getDoctrine()->getManager()->getRepository('GAlterGestionBundle:AnneeFormationEtudiant');

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('GAlterUserBundle:Etudiant');

        $etudiant = $repository->find(2);




        $annee=$rep->getAnnee($etudiant);
        //$a=$annee[0]->getAnneeFormation();
        return $this->render('GAlterGestionBundle:Test:testannee.html.twig', array('t'=>$annee));
    }

}
