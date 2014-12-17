<?php

namespace Nimbu\NotificacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NotificacionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mensaje', 'textarea', array('label' => 'Mensaje'))
        //    ->add('fechaHora')
        //    ->add('validez')
         
        //    ->add('usuario')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Nimbu\NotificacionBundle\Entity\Notificacion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nimbu_notificacionbundle_notificacion';
    }
}
