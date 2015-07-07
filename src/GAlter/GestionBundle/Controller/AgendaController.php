<?php

namespace GAlter\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use GAlter\GestionBundle\Entity\Agenda;
use GAlter\GestionBundle\Form\AgendaType;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 * Agenda controller.
 *
 * @Route("/agenda")
 */
class AgendaController extends Controller
{

    /**
     * Lists all Agenda entities.
     *
     * @Route("/", name="agenda")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {

        $tuteur= $this->getUser();
        $etudiant= $tuteur->getEtudiant();
        $em = $this->getDoctrine()->getManager();

        foreach($etudiant as $etu){
        $agendas[]= $em->getRepository('GAlterGestionBundle:Agenda')->findBy(array('etudiant'=>$etu));
        }
        return $this->render('GAlterGestionBundle:Agenda:index.html.twig', array(
            'agendas' => $agendas,
        ));
    }



    /**
     * Lists all Agenda entities.
     *
     * @Route("/agendaetudiant", name="agendaetudiant")
     * @Method("GET")
     * @Template()
     */
    public function agendaAction()
    {

        $etudiant= $this->getUser();


        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GAlterGestionBundle:Agenda')->findBy(array('etudiant'=>$etudiant));

        if($entities== null)

            throw $this->createNotFoundException('aucune visite programmée pour le moment ');

        ;

        return $this->render('GAlterGestionBundle:Agenda:agendaetudiant.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Agenda entity.
     *
     * @Route("/", name="agenda_create")
     * @Method("POST")
     * @Template("GAlterGestionBundle:Agenda:new.html.twig")
     */
    public function createAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();


        $etudiant = $em->getRepository('GAlterUserBundle:Etudiant')->find($request->get('id'));

        $entity = new Agenda();
        $entity->setEtudiant($etudiant);

        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('agenda_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Agenda entity.
     *
     * @param Agenda $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Agenda $entity, $id=false)
    {

        if($id)
            $url= $this->generateUrl('agenda_create',array('id'=>$id));
        else
            $url= $this->generateUrl('agenda_create');
        $form = $this->createForm(new AgendaType(), $entity, array(
            'action' =>$url,
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }




    /**
     * Displays a form to create a new Agenda entity.
     *
     * @Route("/{id}/new", name="agenda_new")
     * @Template()
     */
    public function newAction($id)
    {
        $entity = new Agenda();
        $form   = $this->createCreateForm($entity,$id);

        return $this->render('GAlterGestionBundle:Agenda:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Agenda entity.
     *
     * @Route("/{id}", name="agenda_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:Agenda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Agenda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Agenda entity.
     *
     * @Route("/{id}/edit", name="agenda_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:Agenda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Agenda entity.');
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
    * Creates a form to edit a Agenda entity.
    *
    * @param Agenda $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Agenda $entity)
    {
        $form = $this->createForm(new AgendaType(), $entity, array(
            'action' => $this->generateUrl('agenda_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Agenda entity.
     *
     * @Route("/{id}", name="agenda_update")
     * @Method("PUT")
     * @Template("GAlterGestionBundle:Agenda:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:Agenda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Agenda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('agenda_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Agenda entity.
     *
     * @Route("/{id}", name="agenda_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GAlterGestionBundle:Agenda')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Agenda entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('agenda'));
    }

    /**
     * Creates a form to delete a Agenda entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('agenda_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
