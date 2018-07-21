<?php

namespace App\Form;

use App\Entity\Articles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArticlesType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
      $builder
          ->add('articleTitle', TextType::class, array(
            'label' => false
          ))
          ->add('isFrom', TextType::class, array(
            'label' => false
          ))
          ->add('articleContent', TextareaType::class, array(
            'label' => false
          ));
  }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Articles::class,
        ]);
    }
}
