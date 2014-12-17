<?php

namespace Nimbu\NotificacionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Nimbu\NotificacionBundle\Entity\Negocio;
use Nimbu\NotificacionBundle\Form\NegocioType;

/**
 * Negocio controller.
 *
 */
class NegocioController extends Controller
{

    /**
     * Lists all Negocio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NotificacionBundle:Negocio')->findAll();

        return $this->render('NotificacionBundle:Negocio:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Negocio entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Negocio();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('negocio_show', array('id' => $entity->getId())));
        }

        return $this->render('NotificacionBundle:Negocio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Negocio entity.
     *
     * @param Negocio $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Negocio $entity)
    {
        $form = $this->createForm(new NegocioType(), $entity, array(
            'action' => $this->generateUrl('negocio_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Negocio entity.
     *
     */
    public function newAction()
    {
        $entity = new Negocio();
        $form   = $this->createCreateForm($entity);

        return $this->render('NotificacionBundle:Negocio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Negocio entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NotificacionBundle:Negocio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Negocio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NotificacionBundle:Negocio:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Negocio entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NotificacionBundle:Negocio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Negocio entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NotificacionBundle:Negocio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Negocio entity.
    *
    * @param Negocio $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Negocio $entity)
    {
        $form = $this->createForm(new NegocioType(), $entity, array(
            'action' => $this->generateUrl('negocio_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Negocio entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NotificacionBundle:Negocio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Negocio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('negocio_edit', array('id' => $id)));
        }

        return $this->render('NotificacionBundle:Negocio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Negocio entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NotificacionBundle:Negocio')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Negocio entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('negocio'));
    }

    /**
     * Creates a form to delete a Negocio entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('negocio_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
