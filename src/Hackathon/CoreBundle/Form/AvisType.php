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
            ->add('Avis', 'text', ['attr' => [
                'class' => 'ac_input',
                'placeholder' => 'Comment avez-vous trouvé cet endroit ?'
            ]])
            ->add('Note', 'integer', [
                'attr' => [
                    'min' => 1,
                    'max' => 5,
                    'class' => 'ac_input',
                    'value' => 1
                ]
            ]);
    }

}
