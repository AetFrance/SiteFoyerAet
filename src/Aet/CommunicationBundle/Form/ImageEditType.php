<?php

namespace Aet\CommunicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ImageEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        parent::buildForm($builder, $options);

        $builder->add('resetImage', 'checkbox',array('required'=>false,
            'label' => false
        ));
    }

    public function getParent()
    {
        return new ImageType();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aet_communicationbundle_image_edit';
    }
}
