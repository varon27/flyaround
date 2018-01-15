<?php

namespace WCS\CoavBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use WCS\CoavBundle\Entity\PlaneModel;
use WCS\CoavBundle\Entity\Terrain;
use WCS\CoavBundle\Entity\User;

class FlightType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('departure', EntityType::class, array(
                'class' => Terrain::class,
                'label' => 'Aéroport de départ'
            ))
            ->add('arrival', EntityType::class, array(
                'class' => Terrain::class,
                'label' => 'Aéroport d\'arrivée'
            ))
            ->add('nbFreeSeats', IntegerType::class, array(
                'label' => 'Nombre de sièges disponibles'
            ))
            ->add('seatPrice', MoneyType::class, array(
                'label' => 'Tarif par siège'
            ))
            ->add('takeOffTime', DateTimeType::class, array(
                'label' => 'Date de décollage'
            ))
            ->add('publicationDate', DateTimeType::class, array(
                'label' => 'Date de publication'
            ))
            ->add('description')
            ->add('pilot', EntityType::class, array(
                'class' => User::class,
                'label' => 'Pilote'
            ))
            ->add('plane', EntityType::class, array(
                'class' => PlaneModel::class,
                'label' => 'Avion'
            ))
            ->add('wasDone',CheckboxType::class, array(
                'label' => 'Le vol a été été opéré'
            ));
    }/**
      * {@inheritdoc}
      */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
            'data_class' => 'WCS\CoavBundle\Entity\Flight'
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'wcs_coavbundle_flight';
    }


}
