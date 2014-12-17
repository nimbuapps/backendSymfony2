<?php

namespace Nimbu\NotificacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Nimbu\NotificacionBundle\Entity\Notificacion;
use Nimbu\NotificacionBundle\Form\NotificacionType;

class DefaultController extends Controller {

    public function enviarMensajeAction() {
      $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NotificacionBundle:Notificacion')->findAll();

        return $this->render('NotificacionBundle:Index:index.html.twig', array(
            'entities' => $entities,
        ));
        
    }



}
