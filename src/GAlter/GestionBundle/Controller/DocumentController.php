<?php

namespace GAlter\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GAlter\GestionBundle\Entity\Document;
use GAlter\GestionBundle\Form\DocumentType;

/**
 * Document controller.
 *
 */
class DocumentController extends Controller
{

    /**
     * Lists all Document entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GAlterGestionBundle:Document')->findAll();

        return $this->render('GAlterGestionBundle:Document:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Document entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Document();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('document_show', array('id' => $entity->getId())));
        }

        return $this->render('GAlterGestionBundle:Document:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Document entity.
     *
     * @param Document $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Document $entity)
    {
        $form = $this->createForm(new DocumentType(), $entity, array(
            'action' => $this->generateUrl('document_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Document entity.
     *
     */
    public function newAction()
    {
        $entity = new Document();
        $form   = $this->createCreateForm($entity);

        return $this->render('GAlterGestionBundle:Document:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Document entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:Document')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Document entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GAlterGestionBundle:Document:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Document entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:Document')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Document entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GAlterGestionBundle:Document:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Document entity.
     *
     * @param Document $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Document $entity)
    {
        $form = $this->createForm(new DocumentType(), $entity, array(
            'action' => $this->generateUrl('document_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Document entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:Document')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Document entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('document_edit', array('id' => $id)));
        }

        return $this->render('GAlterGestionBundle:Document:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Document entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GAlterGestionBundle:Document')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Document entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('document'));
    }

    /**
     * Creates a form to delete a Document entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('document_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
            ;
    }



    public function passageAction()
    {

        $jobs_path=__DIR__."/../../../../web/jobs/passageannee/passageannee/passageannee_run.sh";
        try{
            $retour=exec($jobs_path , $out, $code);
        }catch(Exception $ex){
            print($ex);
        }



    }







    public function etudiantAction()
    {
        $document = new Document();
        $form = $this->createFormBuilder($document)
            ->add('name')
            ->add('file')
            ->add('envoyer ','submit')
            ->getForm()
        ;

        if ($this->getRequest()->isMethod('POST')) {
            $form->handleRequest($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $em->persist($document);
                $em->flush();

                $em1 = $this->getDoctrine()->getManager();
                $query = $em1->createQuery('SELECT MAX(p.id) FROM GAlterUserBundle:User p');
                $var=$query->getResult();
                $id=$var[0][1];




                $jobs_path=__DIR__."/../../../../web/jobs/ImportEtudiant/ImportEtudiant/ImportEtudiant_run.sh";
                $file_path=$document->getAbsolutePath();


                $out = array();
                $code = "1";
                try{
                    $retour=exec($jobs_path."  --context_param source=".$file_path, $out, $code);

                    $query2 = $em->createQuery(
                        'SELECT p
                        FROM GAlterUserBundle:User p
                        WHERE p.id > :id'
                    )->setParameter('id',$id);
                    ;
                    $etudiant_concerne=$query2->getResult();

                    $this->sendEmailsTousers($etudiant_concerne);

                }catch(Exception $ex){
                    print($ex);
                }

                // var_dump($out);
                //var_dump($code);
                $retour=0;
                if($retour == 0)
                {
                    //  print_r('   Importation réusssie: ');

                }

                else
                {
                    //print_r(" Echèc d'importation: ");
                }

            }
        }
        return $this->render('GAlterGestionBundle:Document:import.html.twig',
            array('form' => $form->createView()));

    }


    public function sendEmailsTousers($users){
        if(isset($users)){
            foreach($users as $user){
                $email=$user->getEmail();
                $prenom=$user->getPrenom();

                $swiftmessage = \Swift_Message::newInstance();
                $swiftmessage->setSubject("Vous avez un nouveau message");
                $message = "Bonjour M./Mme " .$prenom. " \n Le responsable vient d activer votre compte. \n Votre id est votre nom et  votre mot de passe est 1234 ";
                $swiftmessage->setFrom("assoumourad@gmail.com")
                    ->setTo($email)
                    ->setBody($message);
                $this->get('mailer')->send($swiftmessage);


            }
        }

    }
}