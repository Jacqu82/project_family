<?php

namespace AppBundle\Form;

use AppBundle\Entity\Family;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Jacek Wesołowski <jacqu25@yahoo.com>
 */
class FamilyApiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('familyName')
            ->add('fatherName')
            ->add('fatherDateOfBirth')
            ->add('motherName')
            ->add('motherDateOfBirth');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => Family::class,
                'csrf_protection' => false
            ]
        );
    }
}
