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
            ->add('Avis', 'textarea', [
                'label' => false,
                'attr' => [
                    'class' => 'ac_input',
                    'style' => 'width:400px;height:100px;margin-bottom:10px;margin-top:20px',
                    'placeholder' => 'Comment avez-vous trouvé cet endroit ?'
            ]])
            ->add('Note', 'integer', [
                'label' => false,
                'attr' => [
                    'min' => 1,
                    'max' => 5,
                    'class' => 'ac_input',
                    'style' => 'width:400px;',
                    'value' => 1
                ]
            ]);
    }

}
