<?php

namespace WCS\CoavBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ReviewType extends AbstractType

{
        /**
         * @param FormBuilderInterface $builder
         * @param array $options
         */
     public function buildForm (FormBuilderInterface $builder, array $options)
     {
         $builder
             ->add ('text', TextType::class, array(
                 'attr' => array(
                     'label' => 'Description',
                     'maxlength' => 250
                 )
             ))
             ->add ('publicationDate', DateTimeType::class, array(
                 'label' => 'Date de publication',
                 'data' => new \DateTime('now')
             ))
             ->add ('note', IntegerType::class, array(
                 'attr' => array(
                     'label' => 'Quelle note donneriez vous à votre avis ?',
                     'min' => 0,
                     'max' => 5
                 )
             ))
             ->add ('userRated', EntityType::class, array(
                 'class' =>'WCS\CoavBundle\Entity\User',
                 'label' => 'Utilisateur noté',
                 'query_builder' => function (EntityRepository $er){
                     return $er->createQueryBuilder('u')
                         ->orderBy('u.lastName', 'ASC');
                 }
             ))
             ->add ('reviewAuthor'/*, TextType::class, array(
                 'label' => 'Auteur de l\'avis'
             )*/);
     }

    /**
     * @param OptionsResolver $resolver
     */
     public function configureOptions(OptionsResolver $resolver)
     {
         $resolver->setDefaults(
             array(
             'data_class' => 'WCS\CoavBundle\Entity\Review'
         ));
     }

     public function getBlockPrefix()
     {
         return 'wcs_coavbundle_review';
     }

}