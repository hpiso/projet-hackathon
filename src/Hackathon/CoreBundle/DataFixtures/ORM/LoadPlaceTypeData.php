<?php

namespace CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Hackathon\CoreBundle\Entity\PlaceType;

class LoadPlaceTypeData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $objectManager)
    {
        $types = [
            [
                'nom' => 'sport',
                'description' => 'Les équipements sportifs de petite ou grande envergure',
                'icon' => 'icon-sport.png'
            ],
            [
                'nom' => 'gastronomie',
                'description' => 'Les meilleurs restaurents',
                'icon' => 'icon-gastronomie.png'
            ],
            [
                'nom' => 'culture',
                'description' => 'Les musées, les expositions etc.',
                'icon' => 'icon-culture.png'
            ],
            [
                'nom' => 'bar',
                'description' => 'Les meilleurs endroits pour boire un verre',
                'icon' => 'icon-bar.png'
            ],
        ];

        foreach ($types as $key => $value)
        {
            $type = new PlaceType();
            $type->setName($value['nom']);
            $type->setDescription($value['description']);
            $type->setIcon($value['icon']);

            $objectManager->persist($type);

            $this->addReference('placetype-' . $value['nom'], $type);
        }
        $objectManager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}