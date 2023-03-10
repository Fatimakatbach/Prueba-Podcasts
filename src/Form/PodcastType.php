<?php

namespace App\Form;

use App\Entity\Podcast;
use App\Entity\Usuario;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PodcastType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('favorito')
            ->add('Titulo')
            ->add('Fecha')
            ->add('descripcion')
            ->add('audio')
            ->add('imagen')
            ->add('usuario', EntityType::class, [
                'class' => Usuario::class,             
                'choice_label' => 'email',              
                'multiple' => false,
                'expanded' => false,
            

            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Podcast::class,
        ]);
    }
}
