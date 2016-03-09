<?php

namespace CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Hackathon\CoreBundle\Entity\Avis;
use Symfony\Component\Validator\Constraints\DateTime;

class LoadAvisData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $objectManager)
    {
        $now = new \DateTime("now");

        $avis = new Avis();
        $avis->setDate($now);
        $avis->setNote(random_int(1,5));
        $avis->setDescription('Une piscine assez agréable');
        $avis->setPlace($this->getReference('place-lions'));

        $avis2 = new Avis();
        $avis2->setDate($now);
        $avis2->setNote(random_int(1,5));
        $avis2->setDescription('Une piscine assez agréable');
        $avis2->setPlace($this->getReference('place-baker'));

        $avis3 = new Avis();
        $avis3->setDate($now);
        $avis3->setNote(random_int(1,5));
        $avis3->setDescription('Un bon restaurent');
        $avis3->setPlace($this->getReference('place-europeen'));

        $avis4 = new Avis();
        $avis4->setDate($now);
        $avis4->setNote(random_int(1,5));
        $avis4->setDescription('Un bon bar');
        $avis4->setPlace($this->getReference('place-chat'));

        $objectManager->persist($avis);
        $objectManager->persist($avis2);
        $objectManager->persist($avis3);
        $objectManager->persist($avis4);
        $objectManager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}