<?php

namespace Nimbu\NotificacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class PersonaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre', 'text', array('label' => 'Nombre'))
                ->add('apellido', 'text', array('label' => 'Apellido'))
                ->add('direccion', 'text', array('label' => 'Domicilio'))
                ->add('telefono', 'text', array('label' => 'Teléfono'))
                ->add('celular', 'text', array('label' => 'Celular'))
                ->add('sexo', 'choice', array(
                    'choices' => array('femenino' => 'Femenino', 'masculido' => 'Masculino'),
                    'label' => 'Sexo'
                ))
                ->add('dni', 'text', array('label' => 'DNI'))
                ->add('cuit', 'text', array('label' => 'Cuit'))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Nimbu\NotificacionBundle\Entity\Persona'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'nimbu_notificacionbundle_persona';
    }

}
