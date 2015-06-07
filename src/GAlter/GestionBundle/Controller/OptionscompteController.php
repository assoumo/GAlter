<?php

namespace GAlter\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use GAlter\GestionBundle\Entity\OptionsCompte;
use GAlter\GestionBundle\Form\Options_compteType;

/**
 * OptionsCompte controller.
 *
 * @Route("/OptionsCompte")
 */
class OptionscompteController extends Controller
{

    /**
     * Lists all OptionsCompte entities.
     *
     * @Route("/", name="OptionsCompte")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GAlterGestionBundle:OptionsCompte')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new OptionsCompte entity.
     *
     * @Route("/", name="options_compte_create")
     * @Method("POST")
     * @Template("GAlterGestionBundle:OptionsCompte:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new OptionsCompte();
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
     * Creates a form to create a OptionsCompte entity.
     *
     * @param OptionsCompte $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(OptionsCompte $entity)
    {
        $form = $this->createForm(new Options_compteType(), $entity, array(
            'action' => $this->generateUrl('options_compte_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new OptionsCompte entity.
     *
     * @Route("/new", name="options_compte_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new OptionsCompte();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a OptionsCompte entity.
     *
     * @Route("/{id}", name="options_compte_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:OptionsCompte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OptionsCompte entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing OptionsCompte entity.
     *
     * @Route("/{id}/edit", name="options_compte_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:OptionsCompte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OptionsCompte entity.');
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
    * Creates a form to edit a OptionsCompte entity.
    *
    * @param OptionsCompte $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(OptionsCompte $entity)
    {
        $form = $this->createForm(new Options_compteType(), $entity, array(
            'action' => $this->generateUrl('options_compte_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing OptionsCompte entity.
     *
     * @Route("/{id}", name="options_compte_update")
     * @Method("PUT")
     * @Template("GAlterGestionBundle:OptionsCompte:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterGestionBundle:OptionsCompte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OptionsCompte entity.');
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
     * Deletes a OptionsCompte entity.
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
            $entity = $em->getRepository('GAlterGestionBundle:OptionsCompte')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find OptionsCompte entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('OptionsCompte'));
    }

    /**
     * Creates a form to delete a OptionsCompte entity by id.
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
