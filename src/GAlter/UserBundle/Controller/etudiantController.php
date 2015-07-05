<?php

namespace GAlter\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GAlter\UserBundle\Entity\etudiant;
use GAlter\UserBundle\Form\etudiantType;

/**
 * etudiant controller.
 *
 */
class etudiantController extends Controller
{

    /**
     * Lists all etudiant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GAlterUserBundle:etudiant')->findAll();

        return $this->render('GAlterUserBundle:etudiant:index.html.twig', array(
            'entities' => $entities,
        ));
    }




    /**
     * Lister mes etudiants .
     *
     */
    public function mesetudiantsAction()
    {

        $tuteur= $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GAlterUserBundle:etudiant')->findBy(array('Tuteur'=>$tuteur));

        return $this->render('GAlterUserBundle:etudiant:mesetudiants.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new etudiant entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new etudiant();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('etudiant_show', array('id' => $entity->getId())));
        }

        return $this->render('GAlterUserBundle:etudiant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a etudiant entity.
     *
     * @param etudiant $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(etudiant $entity)
    {
        $form = $this->createForm(new etudiantType(), $entity, array(
            'action' => $this->generateUrl('etudiant_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new etudiant entity.
     *
     */
    public function newAction()
    {
        $entity = new etudiant();
        $form   = $this->createCreateForm($entity);

        return $this->render('GAlterUserBundle:etudiant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a etudiant entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterUserBundle:etudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find etudiant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GAlterUserBundle:etudiant:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing etudiant entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterUserBundle:etudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find etudiant entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GAlterUserBundle:etudiant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a etudiant entity.
    *
    * @param etudiant $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(etudiant $entity)
    {
        $form = $this->createForm(new etudiantType(), $entity, array(
            'action' => $this->generateUrl('etudiant_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider', 'attr' => array('class' => ' col-sm-offset-4  col-sm-4 btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing etudiant entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GAlterUserBundle:etudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find etudiant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('etudiant'));
        }

        return $this->render('GAlterUserBundle:etudiant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a etudiant entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GAlterUserBundle:etudiant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find etudiant entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('etudiant'));
    }

    /**
     * Creates a form to delete a etudiant entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etudiant_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
