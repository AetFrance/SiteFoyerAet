<?php

namespace Aet\AnnuaireBundle\Form\Type;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Intl\Intl;

class RegistrationType extends  AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $countries = Intl::getRegionBundle()->getCountryNames();
        // add your custom field
        $builder
            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))


            ->add('lastname', 'text')
            ->add('firstname', 'text')
            ->add('image',  new AetImageType())
            ->add('pays','country',array(
                'expanded'=>false,
                'multiple'=>false,
            ))
            ->add('matricule', 'text')
            ->add('whoami', 'textarea', array('required' => false))
            ->add('ville', 'text')
            ->add('code_postale', 'text')
            ->add('telephone','text')

            ->add('activite_principale','choice', array(
                                                        'choices'   => array('Art, Design' => 'Art, Design'
                                                                            ,'Audiovisuel - Spectacle' => 'Audiovisuel - Spectacle'
                                                                            ,'Audit, gestion' => 'Audit, gestion'
                                                                            ,'Automobile' => 'Automobile'
                                                                            ,'Banque, assurance' => 'Banque, assurance'
                                                                            ,'Bois (filière)' => 'Bois (filière)'
                                                                            ,'BTP, architecture' => 'BTP, architecture'
                                                                            ,'Chimie, pharmacie' => 'Chimie, pharmacie'
                                                                            ,'Commerce, distribution' => 'Commerce, distribution'
                                                                            ,'Communication - Marketing, publicité' => 'Communication - Marketing, publicité'
                                                                            ,'Construction aéronautique, ferroviaire et navale' => 'Construction aéronautique, ferroviaire et navale'
                                                                            ,'Culture - Artisanat d\'art' => 'Culture - Artisanat d\'art'
                                                                            ,'Droit, justice' => 'Droit, justice'
                                                                            ,'Edition, Journalisme' => 'Edition, Journalisme'
                                                                            ,'Électronique' => 'Électronique'
                                                                            ,'Énergie' => 'Énergie'
                                                                            ,'Enseignement' => 'Enseignement'
                                                                            ,'Environnement' => 'Environnement'
                                                                            ,'Fonction publique' => 'Fonction publique'
                                                                            ,'Hôtellerie, restauration' => 'Hôtellerie, restauration'
                                                                            ,'Industrie alimentaire' => 'Industrie alimentaire'
                                                                            ,'Informatique, internet et télécom' => 'Informatique, internet et télécom'
                                                                            ,'Logistique, transport' => 'Logistique, transport'
                                                                            ,'Maintenance, entretien' => 'Maintenance, entretien'
                                                                            ,'Mécanique' => 'Mécanique'
                                                                            ,'Mode et industrie textile' => 'Mode et industrie textile'
                                                                            ,'Recherche' => 'Recherche'
                                                                            ,'Santé' => 'Santé'
                                                                            ,'Social' => 'Social'
                                                                            ,'Sport, loisirs – Tourisme' => 'Sport, loisirs – Tourisme'
                                                                            ,'Traduction - interprétariat' => 'Traduction - interprétariat'
                                                                            )
            ,
        'required'  => false,
         'mapped'   => true,
                 ))
            ->add('promotion', 'birthday',
                array(
                    'widget'          => 'choice',
                    'years' => range(date('Y') - 110, date('Y')),
                    'empty_value'     => array('year' => '----'),
    )
        )


        ;

    }
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Aet\AnnuaireBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'registration';
    }
}
