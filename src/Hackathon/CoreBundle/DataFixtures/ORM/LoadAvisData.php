<?php

namespace CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use HackathonCoreBundle\Entity\Avis;

class LoadAvisData implements FixtureInterface
{
    public function load(ObjectManager $objectManager)
    {


    }

    public function getOrder()
    {
        return 4;
    }
}