<?php

namespace CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Hackathon\CoreBundle\Entity\Hotel;
use Doctrine\Common\Persistence\ObjectManager;

class LoadHotelData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $objectManager)
    {

        $hotel = new Hotel();
        $hotel->setName('Best Western Hotel Aurore');
        $hotel->setAddress('13 Rue Traversière, 75012 Paris');
        $hotel->setSlug('best-western-hotel-aurore');

        $hotel2 = new Hotel();
        $hotel2->setName('Best Western Hotel Marais Bastille');
        $hotel2->setAddress('36 Boulevard Richard Lenoir, 75011 Paris');
        $hotel2->setSlug('best-western-hotel-marais-bastille');

        $objectManager->persist($hotel);
        $objectManager->persist($hotel2);

        $objectManager->flush();

        $this->addReference('hotel-aurore',$hotel);
        $this->addReference('hotel-bastille',$hotel);
    }

    public function getOrder()
    {
        return 2;
    }
}