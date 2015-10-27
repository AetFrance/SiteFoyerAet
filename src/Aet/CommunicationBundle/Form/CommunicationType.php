<?php

namespace Aet\CommunicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommunicationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('shortDesc', 'text')
			->add('image',  new ImageType())
            ->add('body', 'ckeditor')
            ->add('categories','entity', array(
                                                'class'    => 'AetCommunicationBundle:Category',
                                                'property' => 'name',
                                                'multiple' => true
                                                                )
                )
            ->add('Enregistrer',      'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Aet\CommunicationBundle\Entity\Communication'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aet_communicationbundle_communication';
    }
}
