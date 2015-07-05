<?php

namespace GAlter\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GAlter\GestionBundle\Entity\RemarqueTuteurRapport;
use GAlter\GestionBundle\Form\RemarqueTuteurRapportType;

/**
 * RemarqueTuteurRapport controller.
 *
 */
class RemarqueTuteurRapportController extends Controller
{

    /**
     * Lists all RemarqueTuteurRapport entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GAlterGestionBundle:RemarqueTuteurRapport')->findAll();

        return $this->render('GAlterGestionBundle:RemarqueTuteurRapport:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new RemarqueTuteurRapport entity.
     *
     */



    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $tuteurId = $this->getUser();
        $tuteurIdRapport = $em->getRepository('GAlterGestionBundle:Rapport')->find($request->get('id'));
        $entity = new RemarqueTuteurRapport();
        $entity->setTuteurId($tuteurId);
        $entity->setTuteurIdRapport($tuteurIdRapport);
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rapport'));
        }

        return $this->render('GAlterGestionBundle:RemarqueTuteurRapport:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a RemarqueTuteurRapport entity.
     *
     * @param RemarqueTuteurRapport $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(RemarqueTuteurRapport $entity, $id=false)
    {

        if($id)
            $url= $this->generateUrl('remarquetuteurrapport_create',array('id'=>$id));
        else
            $url= $this->generateUrl('remarquetuteurrapport_create');
        $form = $this->createForm(new RemarqueTuteurRapportType(), $entity, array(
            'action' => $url,
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new RemarqueTuteurRapport entity.
     *
     */
    public function newAction($id)
    {
        $entity = new RemarqueTuteurRapport();
        $form   = $this->createCreateForm($entity,$id);

        return $this->render('GAlterGestionBundle:RemarqueTuteurRapport:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a RemarqueTuteurRapport entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:RemarqueTuteurRapport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RemarqueTuteurRapport entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GAlterGestionBundle:RemarqueTuteurRapport:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing RemarqueTuteurRapport entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:RemarqueTuteurRapport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RemarqueTuteurRapport entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GAlterGestionBundle:RemarqueTuteurRapport:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a RemarqueTuteurRapport entity.
    *
    * @param RemarqueTuteurRapport $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(RemarqueTuteurRapport $entity)
    {
        $form = $this->createForm(new RemarqueTuteurRapportType(), $entity, array(
            'action' => $this->generateUrl('remarquetuteurrapport_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing RemarqueTuteurRapport entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:RemarqueTuteurRapport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RemarqueTuteurRapport entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('remarquetuteurrapport_edit', array('id' => $id)));
        }

        return $this->render('GAlterGestionBundle:RemarqueTuteurRapport:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a RemarqueTuteurRapport entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GAlterGestionBundle:RemarqueTuteurRapport')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find RemarqueTuteurRapport entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('remarquetuteurrapport'));
    }

    /**
     * Creates a form to delete a RemarqueTuteurRapport entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('remarquetuteurrapport_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
