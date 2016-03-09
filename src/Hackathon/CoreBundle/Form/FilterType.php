<?php

namespace Hackathon\CoreBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FilterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Recherche', EntityType::class, [
                'class' => 'HackathonCoreBundle:Hotel',
                'choice_label' => 'name',
                'label' => false

            ])
        ;
    }

}
