<?php

namespace Hackathon\CoreBundle\Form;

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
            ->add('Avis', 'textarea', ['attr' => [
                'label' => false,
                'class' => 'ac_input',
                'style' => 'width:400px;height:100px;',
                'placeholder' => 'Comment avez-vous trouvé cet endroit ?'
            ]])
            ->add('Note', 'integer', [
                'attr' => [
                    'label' => false,
                    'min' => 1,
                    'max' => 5,
                    'class' => 'ac_input',
                    'style' => 'width:50px;',
                    'value' => 1
                ]
            ]);
    }

}
