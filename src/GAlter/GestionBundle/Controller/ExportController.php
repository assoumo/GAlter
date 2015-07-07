<?php

namespace GAlter\GestionBundle\Controller;
use Doctrine\ORM\EntityRepository;
use GAlter\UserBundle\Entity\Etudiant;
use GAlter\UserBundle\Entity\EtudiantRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use GAlter\GestionBundle\Entity\Rapport;
use GAlter\GestionBundle\Entity\Audit;
use GAlter\GestionBundle\Form\RapportType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/export")
 * @Template()
 */
class ExportController extends Controller
{

    /**
     * @Route("/formexport", name="formulaire")
     * @Template()
     */
    public function formulaireAction(Request $request){
        $etudiant=new Etudiant();
        $rapports=new Rapport();
        $session =new session();


        $user=$session->get('user');
        //$formation=$user->getFormation();

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('GAlterUserBundle:Etudiant');

        $etudiant = $repository->find($user->getId());


        $annee_formation=$etudiant->getAnneeFormationEtudiant();
        $formation=$annee_formation[0]->getFormation();
        $formbuilder=$this->get('form.factory')->createBuilder('form', $etudiant)
                                            ->add("prenom",'entity'
                                                ,
                                               array('class'=>'GAlter\\UserBundle\\Entity\\Etudiant','property'=>'prenom',
                                                   'query_builder' => function(EntityRepository  $er ) use ( $formation ) {
                                                return $er->createQueryBuilder('e')
                                                         ->join('e.anneeFormationEtudiant', 'a')
                                                         ->where('a.Formations = :formation')
                                                         ->setParameter('formation', $formation);
                                                      }
                                                   )
                                               )
                                        ->add('Annee', 'choice', array(
                                            'choices'   => array('2014' => '2014', '2015' => '2015'),'mapped'=>false))
                                        ->add("envoyer","submit")
        ;
        $form=$formbuilder->getForm();
        $form->handleRequest($request);
        if($form->isValid()){

            $annee=$form->get('Annee')->getData();
            $annee=date($annee);
            $etudiant=$form->get('prenom')->getData();
            $rapp=$rapports->rapportParAnnee($annee,$etudiant);
           // var_dump($rapp[1]);
            unset($rapp[0]);
            return $this->forward('GAlterGestionBundle:Export:exportertous',array("rapports"=> $rapp));
        }

        return $this->render('GAlterGestionBundle:Export:formulaire.html.twig',
            array("rapports"=>"rapport",'form' => $form->createView(),));

    }







    /**
     * @Route("/rapportpromot", name="rapportpromot")
     * @Template()
     */
    public function rapportpromotAction(Request $request){
        $etudiant=new Etudiant();
        $rapports=new Rapport();
        $session =new session();


        $user=$session->get('user');
        //$formation=$user->getFormation();

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('GAlterUserBundle:Responsable');

        $responsable= $repository->find($user->getId());
        $formation=$this->getFormation();
        $annee_formations=$formation->getAnneeFormationEtudiant();
        $annees=$annee_formations->getAnneeByFormation($formation);

        //$annee_formation=$etudiant->getAnneeFormationEtudiant();
        //$formation=$annee_formation[0]->getFormation();

        $formbuilder=$this->get('form.factory')->createBuilder('form', $formation)
            ->add("formation",'entity'
                ,
                array('class'=>'GAlter\\GestionBundle\\Entity\\Formation','property'=>'libelle',
                    'query_builder' => function(EntityRepository  $er ) use ( $responsable ) {
                        return $er->createQueryBuilder('e')
                            //->join('e.anneeFormationEtudiant', 'a')
                            ->where('a.responsable = :responsable')
                            ->setParameter('responsable', $responsable);
                    }
                )
            )
            ->add('Promo', 'choice', array(
                'choice_list'   => new ChoiceList($annees,$annees),'mapped'=>false))
            ->add("envoyer","submit")
        ;
        $form=$formbuilder->getForm();
        $form->handleRequest($request);
        if($form->isValid()){

            $annee=$form->get('Promo')->getData();
            $annee=date($annee);
            $formation=$form->get('formation')->getData();

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('GAlterUserBundle:Rapport');
            $rapport=$repository->getAllReportByFormationAnnee($formation,$annee);

            return $this->forward('GAlterGestionBundle:Export:exportertous',array("rapports"=> $rapport));
        }

        return $this->render('GAlterGestionBundle:Export:rapportpromot.html.twig',
            array("rapports"=>"rapport",'form' => $form->createView(),));

    }





    /**
     * @Route("/toutrapport/{rapports}", name="exporter_tout")
     * @Method("POST")
     * @Template()
     */
    public function exportertousAction($rapports){


        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $session=new session();

        $html = $this->renderView('GAlterGestionBundle:Export:tous.html.twig', array("rapports"=>$rapports));

        //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...
        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');

        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('real');

        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);

        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $content = $html2pdf->Output('', true);

        //$html2pdf->Output('Facture.pdf');
        $response = new Response();
        $response->setContent($content);
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-disposition', 'filename=rapport.pdf');


        return $response;

    }







    /**
     * @Route("/toutrap/{id}", name="exportertout")
     * @Method("GET")
     * @Template()
     */
    public function exportertoutAction($id){


        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $session=new session();

        $etudiant= $this->getDoctrine()->getManager()->getRepository('GAlterUserBundle:Etudiant')->findBy(array('id'=>$id));
        $rapports=$etudiant[0]->getRapports();
        $html = $this->renderView('GAlterGestionBundle:Export:tous.html.twig', array("rapports"=>$rapports));

        //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...
        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');

        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('real');

        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);

        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $content = $html2pdf->Output('', true);

        //$html2pdf->Output('Facture.pdf');
        $response = new Response();
        $response->setContent($content);
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-disposition', 'filename=rapport.pdf');


        return $response;

    }
}
