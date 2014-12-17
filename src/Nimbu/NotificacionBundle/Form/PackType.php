<?php

namespace Nimbu\NotificacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PackType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text', array('label' => 'Nombre del Pack'))
            ->add('cantidadMensajeDiario', 'integer', array('label' => 'Cantidad de Mensajes Diarios'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Nimbu\NotificacionBundle\Entity\Pack'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nimbu_notificacionbundle_pack';
    }
}
