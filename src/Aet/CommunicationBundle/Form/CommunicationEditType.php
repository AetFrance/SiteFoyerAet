<?php
/**
 * Created by PhpStorm.
 * User: JRMD
 * Date: 17/03/2015
 * Time: 22:55
 */

namespace Aet\CommunicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CommunicationEditType  extends AbstractType{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        parent::buildForm($builder, $options);

        $builder->remove('image')
            ->add('image',  new ImageEditType())
        ;

    }

    public function getParent()
    {
        return new CommunicationType();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aet_communicationbundle_communication_edit';
    }
}