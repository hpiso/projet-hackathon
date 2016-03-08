<?php

namespace CoreBundle\DataFixtures\ORM;

use Hackathon\CoreBundle\Entity\PlaceType;

class LoadPlaceTypeData implements FixtureInterface
{
    public function load(ObjectManager $objectManager)
    {
        $types = [
            [
                'nom' => 'sport',
                'description' => 'Les équipements sportifs de petite ou grande envergure'
            ],
            [
                'nom' => 'gastronomie',
                'description' => 'Les meilleurs restaurents'
            ],
            [
                'nom' => 'culture',
                'description' => 'Les musées, les expositions etc.'
            ],
            [
                'nom' => 'bar',
                'description' => 'Les meilleurs endroits pour boire un verre'
            ],
        ];

        foreach($types as $value)
        {
            $type = new PlaceType();
            $type->setName($value['nom']);
            $type->setDescription($value['nom']);

            $objectManager->persist($type);
        }
        $objectManager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}