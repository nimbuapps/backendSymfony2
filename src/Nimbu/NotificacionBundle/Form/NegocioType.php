<?php

namespace Nimbu\NotificacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NegocioType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre', 'text', array('label' => 'Nombre del Negocio'))
                ->add('direccion', 'text', array('label' => 'Domicilio'))
                ->add('telefono', 'text', array('label' => 'Teléfono'))
                ->add('logo', 'file', array('label' => 'Logo'))
                ->add('pack', 'entity', array(
                    'class' => 'NotificacionBundle:Pack',
                    'property' => 'nombre',
                    'label' => 'Pack'
        ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Nimbu\NotificacionBundle\Entity\Negocio'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'nimbu_notificacionbundle_negocio';
    }

}
