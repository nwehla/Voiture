<?php

namespace App\Form;

use App\Entity\RechercheVoiture;
use Symfony\Component\Form\AbstractType;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class RechercheVoitureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('minAnnee',IntegerType::class,[
                "required"=>false,
                "label"=>"Annnee de:",
            ])
            ->add('maxAnnee',IntegerType::class,[
                "required"=>false,
                "label"=>"Annee a:"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RechercheVoiture::class,
        ]);
    }
}
