<?php

namespace GAlter\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GAlter\GestionBundle\Entity\AnneeFormationEtudiant;
use GAlter\GestionBundle\Form\AnneeFormationEtudiantType;

/**
 * AnneeFormationEtudiant controller.
 *
 */
class AnneeFormationEtudiantController extends Controller
{

    /**
     * Lists all AnneeFormationEtudiant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GAlterGestionBundle:AnneeFormationEtudiant')->findAll();

        return $this->render('GAlterGestionBundle:AnneeFormationEtudiant:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new AnneeFormationEtudiant entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new AnneeFormationEtudiant();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anneeformationetudiant_show', array('id' => $entity->getId())));
        }

        return $this->render('GAlterGestionBundle:AnneeFormationEtudiant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a AnneeFormationEtudiant entity.
     *
     * @param AnneeFormationEtudiant $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(AnneeFormationEtudiant $entity)
    {
        $form = $this->createForm(new AnneeFormationEtudiantType(), $entity, array(
            'action' => $this->generateUrl('anneeformationetudiant_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new AnneeFormationEtudiant entity.
     *
     */
    public function newAction()
    {
        $entity = new AnneeFormationEtudiant();
        $form   = $this->createCreateForm($entity);

        return $this->render('GAlterGestionBundle:AnneeFormationEtudiant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AnneeFormationEtudiant entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:AnneeFormationEtudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AnneeFormationEtudiant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GAlterGestionBundle:AnneeFormationEtudiant:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing AnneeFormationEtudiant entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:AnneeFormationEtudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AnneeFormationEtudiant entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GAlterGestionBundle:AnneeFormationEtudiant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a AnneeFormationEtudiant entity.
    *
    * @param AnneeFormationEtudiant $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AnneeFormationEtudiant $entity)
    {
        $form = $this->createForm(new AnneeFormationEtudiantType(), $entity, array(
            'action' => $this->generateUrl('anneeformationetudiant_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing AnneeFormationEtudiant entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:AnneeFormationEtudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AnneeFormationEtudiant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('anneeformationetudiant_edit', array('id' => $id)));
        }

        return $this->render('GAlterGestionBundle:AnneeFormationEtudiant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a AnneeFormationEtudiant entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GAlterGestionBundle:AnneeFormationEtudiant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AnneeFormationEtudiant entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anneeformationetudiant'));
    }

    /**
     * Creates a form to delete a AnneeFormationEtudiant entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anneeformationetudiant_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
