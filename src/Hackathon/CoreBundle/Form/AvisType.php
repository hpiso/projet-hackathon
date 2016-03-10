<?php

namespace Hackathon\CoreBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AvisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Avis', 'text')
            ->add('Note', 'integer',  array(
                'attr' =>array(
                    'min' => 0,
                    'max' => 5)))
        ;
    }

}
