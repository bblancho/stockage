<?php

namespace App\Form;

use App\Entity\Recherche;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('recherche', TextType::class,
                [
                    'label' => false,
                    'required' => false,
                    'attr' => ['aria-describedby' => 'button-addon-group', 'placeholder' => '', 'class' => 'form-control col-md-12']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recherche::class,
	        'method' =>'get',
	        'csrf_protection' => false
        ]);
    }
}
