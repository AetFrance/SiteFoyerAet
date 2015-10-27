<?php

namespace Aet\AnnuaireBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AetImageEditType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('resetImage', 'checkbox',array('required'=>false,
            'label' => false
        ));
    }

    public function getParent()
    {
        return new AetImageType();
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'aet_annuairebundle_aetimage_edit';
    }
}
