<?php

namespace AppBundle\Form;

use AppBundle\Entity\Family;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FamilyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('familyName')
            ->add('fatherName')
            ->add('fatherDateOfBirth', BirthdayType::class, [
                'widget' => 'single_text',
            ])
            ->add('motherName')
            ->add('motherDateOfBirth', BirthdayType::class, [
                'widget' => 'single_text'
            ])
            ->add('children', CollectionType::class, [
                'entry_type' => ChildEmbeddedForm::class,
                'allow_delete' => true,
                'allow_add' => true,
                'by_reference' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Family::class]);
    }
}
