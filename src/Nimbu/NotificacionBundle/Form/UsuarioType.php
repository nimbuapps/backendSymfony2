<?php

namespace Nimbu\NotificacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType;
 
use Nimbu\NotificacionBundle\Form\PersonaType;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder
                 ->add('persona', new PersonaType())
                ->add('fos', new RegistrationFormType('Nimbu\NotificacionBundle\Entity\User'))
                ->add('negocio', 'entity', array(
                    'class' => 'NotificacionBundle:Negocio',
                    'property' => 'nombre',
                    'label' => 'Negocio',
               
                ))
                
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'cascade_validation' => true,  
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nimbu_notificacionbundle_usuario';
    }
}
