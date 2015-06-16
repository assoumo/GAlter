<?php

namespace GAlter\GestionBundle\Controller;

use GAlter\UserBundle\Entity\Etudiant;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use GAlter\GestionBundle\Entity\Rapport;
use GAlter\GestionBundle\Entity\Audit;
use GAlter\GestionBundle\Form\RapportType;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Rapport controller.
 *
 * @Route("/rapport")
 */
class RapportController extends Controller
{

    /**
     * Lists all Rapport entities.
     *
     * @Route("/", name="rapport")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session=new session();
        $user=$session->get('user');

        $entities = $em->getRepository('GAlterGestionBundle:Rapport')->findAll();

        return array(
            'entities' => $entities,
            'user'=>$user
        );
    }
    /**
     * Creates a new Rapport entity.
     *
     * @Route("/", name="rapport_create")
     * @Method("POST")
     * @Template("GAlterGestionBundle:Rapport:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Rapport();

        $session= new session();
        $form = $this->createCreateForm($entity);
        $session= new session();
        $user=$session->get('user');

        $em = $this->getDoctrine()->getManager();
        $repository=$em->getRepository('GAlterUserBundle:Etudiant');
        $etudiant= $repository->find($user->getId());




        $form->handleRequest($request);


        if ($form->isValid()) {
           // $date = date("Y-m-d");
            $date="-----";
            $entity->setDate($date);
            $entity->setEtudiant($etudiant);
            $em = $this->getDoctrine()->getManager();
            try {

                $em->persist($entity);
                $em->flush();
            }catch(Exception $exc){
                print($exc);
            }
            return $this->redirect($this->generateUrl('rapport'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'user'   => $session->get('user')
        );
    }

    /**
     * send email to tuteur student
     * @param $etudiant
     */
    private function sendpublicemail( $etudiant, $message=null){

      $tuteurs= $etudiant->getTuteurs();
        foreach($tuteurs as $tuteur){
            // envoie des messages aus tuteurs
            $email=$tuteur->getEmail();
            $nom=$tuteur->getNom();

            $swiftmessage=\Swift_Message::newInstance();
            $swiftmessage->setSubject("Vous avez un nouveau message");
            $swiftmessage->setFrom("Platform@gmal.com")
                ->setTo($email)
                ->setBody("test mail");
            $this->get('mailer')->sed($swiftmessage);
        }
    }

    private function sendsecureemail($etudiant){

    }

    /**
     * Creates a form to create a Rapport entity.
     *
     * @param Rapport $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Rapport $entity)
    {
        $form = $this->createForm(new RapportType(), $entity, array(
            'action' => $this->generateUrl('rapport_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Rapport entity.
     *
     * @Route("/new", name="rapport_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Rapport();
        $form   = $this->createCreateForm($entity);
        $session=new session();
        $user=$session->get('user');

        return array(
            'entity' => $entity,
            'user'=>$user,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Rapport entity.
     *
     * @Route("/{id}", name="rapport_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:Rapport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapport entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Rapport entity.
     *
     * @Route("/{id}/edit", name="rapport_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:Rapport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapport entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a Rapport entity.
     *
     * @param Rapport $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Rapport $entity)
    {
        $form = $this->createForm(new RapportType(), $entity, array(
            'action' => $this->generateUrl('rapport_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Rapport entity.
     *
     * @Route("/{id}", name="rapport_update")
     * @Method("PUT")
     * @Template("GAlterGestionBundle:Rapport:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:Rapport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapport entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('rapport_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Rapport entity.
     *
     * @Route("/{id}", name="rapport_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GAlterGestionBundle:Rapport')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rapport entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rapport'));
    }

    /**
     * Creates a form to delete a Rapport entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rapport_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
            ;
    }
}
