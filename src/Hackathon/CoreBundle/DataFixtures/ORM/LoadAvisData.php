<?php

namespace CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Hackathon\CoreBundle\Entity\Avis;

class LoadAvisData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $objectManager)
    {
        $now = new \DateTime("now");

        $datas = [
            ['Une piscine assez agréable', 'place-lions'],
            ['Une piscine assez agréable', 'place-baker'],
            ['Un bon restaurant', 'place-europeen'],
            ['Un bon bar', 'place-chat'],
            ['Tres belle église, je viens prier ici souvent', 'place-eglise'],
            ['J\'aime beaucoup les vitraux de cette église', 'place-eglise'],
            ['BOF', 'place-eglise'],
            ['beau terrain', 'place-tennis'],
            ['les courts sont nuls, je n\'irai plus jamais', 'place-tennis'],
        ];

        foreach($datas as $data)
        {
            $avis = new Avis();
            $avis->setDate($now);
            $avis->setNote(random_int(1, 5));
            $avis->setDescription($data[0]);
            $avis->setPlace($this->getReference($data[1]));

            $objectManager->persist($avis);
        }
        $objectManager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}