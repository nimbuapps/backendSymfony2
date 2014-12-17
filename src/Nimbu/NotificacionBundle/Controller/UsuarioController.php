<?php

namespace Nimbu\NotificacionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nimbu\NotificacionBundle\Entity\Usuario;
use Nimbu\NotificacionBundle\Form\UsuarioType;
use Nimbu\NotificacionBundle\Entity\Persona;
use Nimbu\NotificacionBundle\Entity\User;
use Nimbu\NotificacionBundle\Entity\UsuarioNegocio;
use Nimbu\NotificacionBundle\Entity\Negocio;

/**
 * Usuario controller.
 *
 */
class UsuarioController extends Controller {

    /**
     * Lists all Usuario entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NotificacionBundle:Usuario')->findAll();

        return $this->render('NotificacionBundle:Usuario:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Usuario entity.
     *
     */
    public function createAction(Request $request) {

        $entityP = new Persona();
        $entity = new Usuario();
        $entityU = new User();
//        $entityUsu = new Usuario();
        $entityUsuN = new UsuarioNegocio();
        $entityN = new Negocio();
        $form = $this->createCreateForm($entityU, $entityN, $entityP);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $entityP = $form['persona']->getData();
$em->persist($entityP);

            $entityU = $form['fos']->getData();
            $em->persist($entityU);

            $entity->setFos($entityU);
            $entity->setPersona($entityP);
            $em->persist($entity);

            $entityN = $form['negocio']->getData();
            $em->persist($entityN);

            $entityUsuN->setUsuario($entity);
            $entityUsuN->setNegocio($entityN);
            $em->persist($entityUsuN);
            $em->flush();

            return $this->redirect($this->generateUrl('usuario_show', array('id' => $entity->getId())));
        }

        return $this->render('NotificacionBundle:Usuario:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Usuario entity.
     *
     * @param Usuario $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm($fos, $negocio, $persona) {
        $entity = array('fos' => $fos, 'negocio' => $negocio, 'persona' => $persona);
        
        $form = $this->createForm(new UsuarioType(), $entity, array(
            'action' => $this->generateUrl('usuario_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Usuario entity.
     *
     */
    public function newAction() {
       
         $entityP = new Persona();
        $entity = new Usuario();
        $entityU = new User();
 
        $entityN = new Negocio();
        $form = $this->createCreateForm($entityU, $entityN, $entityP);
       

        return $this->render('NotificacionBundle:Usuario:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Usuario entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NotificacionBundle:Usuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NotificacionBundle:Usuario:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Usuario entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NotificacionBundle:Usuario')->find($id);
 $entityP = $em->getRepository('NotificacionBundle:Persona')->findOneBy(
          array('id' => $entity->getPersona()->getId()), array('id' => 'DESC'));
  $entityU = $em->getRepository('NotificacionBundle:User')->findOneBy(
          array('id' => $entity->getFos()->getId()), array('id' => 'DESC'));
  $entityUsuN = $em->getRepository('NotificacionBundle:UsuarioNegocio')->findOneBy(
          array('usuario' => $entity), array('id' => 'DESC'));
        $entityN = $em->getRepository('NotificacionBundle:Negocio')->findOneBy(
                array('id' => $entityUsuN->getNegocio()->getId()), array('id' => 'DESC'));
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $editForm = $this->createEditForm($entityU, $entityN, $entityP, $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NotificacionBundle:Usuario:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Usuario entity.
     *
     * @param Usuario $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm($fos, $negocio, $persona, $entityU) {
        $entity = array('fos' => $fos, 'negocio' => $negocio, 'persona' => $persona);
        $form = $this->createForm(new UsuarioType(), $entity, array(
            'action' => $this->generateUrl('usuario_update', array('id' => $entityU->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar'));

        return $form;
    }

    /**
     * Edits an existing Usuario entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NotificacionBundle:Usuario')->find($id);
 $entityP = $em->getRepository('NotificacionBundle:Persona')->findOneBy(
          array('id' => $entity->getPersona()->getId()), array('id' => 'DESC'));
  $entityU = $em->getRepository('NotificacionBundle:User')->findOneBy(
          array('id' => $entity->getFos()->getId()), array('id' => 'DESC'));
  $entityUsuN = $em->getRepository('NotificacionBundle:UsuarioNegocio')->findOneBy(
          array('usuario' => $entity), array('id' => 'DESC'));
        $entityN = $em->getRepository('NotificacionBundle:Negocio')->findOneBy(
                array('id' => $entityUsuN->getNegocio()->getId()), array('id' => 'DESC'));
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $editForm = $this->createEditForm($entityU, $entityN, $entityP, $entity);

      $deleteForm = $this->createDeleteForm($id);
  
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('usuario_edit', array('id' => $id)));
        }

        return $this->render('NotificacionBundle:Usuario:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Usuario entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NotificacionBundle:Usuario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Usuario entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('usuario'));
    }

    /**
     * Creates a form to delete a Usuario entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('usuario_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
