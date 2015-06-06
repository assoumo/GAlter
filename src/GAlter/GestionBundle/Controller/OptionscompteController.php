<?php

namespace GAlter\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use GAlter\GestionBundle\Entity\Options_compte;
use GAlter\GestionBundle\Form\Options_compteType;

/**
 * Options_compte controller.
 *
 * @Route("/options_compte")
 */
class OptionscompteController extends Controller
{

    /**
     * Lists all Options_compte entities.
     *
     * @Route("/", name="options_compte")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GAlterGestionBundle:Options_compte')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Options_compte entity.
     *
     * @Route("/", name="options_compte_create")
     * @Method("POST")
     * @Template("GAlterGestionBundle:Options_compte:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Options_compte();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('options_compte_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Options_compte entity.
     *
     * @param Options_compte $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Options_compte $entity)
    {
        $form = $this->createForm(new Options_compteType(), $entity, array(
            'action' => $this->generateUrl('options_compte_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Options_compte entity.
     *
     * @Route("/new", name="options_compte_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Options_compte();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Options_compte entity.
     *
     * @Route("/{id}", name="options_compte_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:Options_compte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Options_compte entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Options_compte entity.
     *
     * @Route("/{id}/edit", name="options_compte_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:Options_compte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Options_compte entity.');
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
    * Creates a form to edit a Options_compte entity.
    *
    * @param Options_compte $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Options_compte $entity)
    {
        $form = $this->createForm(new Options_compteType(), $entity, array(
            'action' => $this->generateUrl('options_compte_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Options_compte entity.
     *
     * @Route("/{id}", name="options_compte_update")
     * @Method("PUT")
     * @Template("GAlterGestionBundle:Options_compte:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:Options_compte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Options_compte entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('options_compte_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Options_compte entity.
     *
     * @Route("/{id}", name="options_compte_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GAlterGestionBundle:Options_compte')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Options_compte entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('options_compte'));
    }

    /**
     * Creates a form to delete a Options_compte entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('options_compte_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
