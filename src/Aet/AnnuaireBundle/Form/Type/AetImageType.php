<?php

namespace Aet\AnnuaireBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AetImageType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', 'file',array('required'=>false,
                'label' => false
            ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Aet\AnnuaireBundle\Entity\AetImage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aet_annuairebundle_aetimage';
    }
}
