<?php

namespace Aet\AnnuaireBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->remove('plainPassword')
                ->remove('image',  new AetImageType())
                ->add('image',  new AetImageEditType());

    }
    


    public function getParent()
    {
        return new RegistrationType();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aet_annuairebundle_user_edit';
    }
}
