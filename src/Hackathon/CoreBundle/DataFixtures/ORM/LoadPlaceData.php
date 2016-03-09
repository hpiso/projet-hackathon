<?php

namespace CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Hackathon\CoreBundle\Entity\Place;

class LoadPlaceData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $objectManager)
    {
        $place = new Place();
        $place->setName('Le Café des Chats');
        $place->setDescription('Un café ou des chats se promènent en liberté');
        $place->setAddress('9 Rue Sedaine, 75011 Paris');
        $place->setTel('09 73 53 35 81');
        $place->setUrlSite('http://www.lecafedeschats.fr');
        $place->setHotel($this->getReference('hotel-bastille'));
        $place->setPlaceType($this->getReference('placetype-bar'));

        $place2 = new Place();
        $place2->setName('Chez Janou');
        $place2->setDescription('Autour d\'un comptoir central, ce bistrop provençal avec terrasse propose une carte sobre et plus de 80 pastis');
        $place2->setAddress('2 Rue Roger Verlomme, 75003 Paris');
        $place2->setTel('01 42 72 28 41');
        $place2->setUrlSite('http://www.chezjanou.com');
        $place2->setHotel($this->getReference('hotel-bastille'));
        $place2->setPlaceType($this->getReference('placetype-gastronomie'));

        $place3 = new Place();
        $place3->setName('Comédie Bastille');
        $place3->setDescription('Ce théâtre, ancien atelier de menuiserie, accueille comédies, one-man-shows et concerts pour enfants.');
        $place3->setAddress('5 Rue Nicolas Appert, 75011 Paris');
        $place3->setTel('01 48 07 52 07');
        $place3->setUrlSite('http://www.comedie-bastille.com');
        $place3->setHotel($this->getReference('hotel-bastille'));
        $place3->setPlaceType($this->getReference('placetype-culture'));

        $place4 = new Place();
        $place4->setName('Piscine de la Cour des Lions');
        $place4->setDescription('Une piscine parisienne classique');
        $place4->setAddress('9 Rue Alphonse Baudin, 75011 Paris');
        $place4->setTel('01 43 55 09 23');
        $place4->setUrlSite('http://equipement.paris.fr');
        $place4->setHotel($this->getReference('hotel-bastille'));
        $place4->setPlaceType($this->getReference('placetype-sport'));

        $objectManager->persist($place);
        $objectManager->persist($place2);
        $objectManager->persist($place3);
        $objectManager->persist($place4);

        /********************************************************************/

        $place = new Place();
        $place->setName('L\'Express de Lyon');
        $place->setDescription('Café-bar au cadre sobre et convivial, réputé pour sa sélection de bières pression et ses plats typiques.');
        $place->setAddress('1 Rue de Lyon, 75012 Paris');
        $place->setTel('01 43 43 21 32');
        $place->setUrlSite('');
        $place->setHotel($this->getReference('hotel-aurore'));
        $place->setPlaceType($this->getReference('placetype-bar'));
        $place5 = new Place();
        $place5->setName('L\'Express de Lyon');
        $place5->setDescription('Café-bar au cadre sobre et convivial, réputé pour sa sélection de bières pression et ses plats typiques.');
        $place5->setAddress('1 Rue de Lyon, 75012 Paris');
        $place5->setTel('01 43 43 21 32');
        $place5->setUrlSite('');
        $place5->setHotel($this->getReference('hotel-aurore'));
        $place5->setPlaceType($this->getReference('placetype-bar'));

        $place2 = new Place();
        $place2->setName('L\'Européen');
        $place2->setDescription('Brasserie au décor rétro et design, avec lustres en verrine et miroirs, spécialisée dans les fruits de mer.');
        $place2->setAddress('21 bis Boulevard Diderot, 75012 Paris');
        $place2->setTel('01 43 43 99 70');
        $place2->setUrlSite('http://www.l-europeen.com/');
        $place2->setHotel($this->getReference('hotel-aurore'));
        $place2->setPlaceType($this->getReference('placetype-gastronomie'));
        $place6 = new Place();
        $place6->setName('L\'Européen');
        $place6->setDescription('Brasserie au décor rétro et design, avec lustres en verrine et miroirs, spécialisée dans les fruits de mer.');
        $place6->setAddress('21 bis Boulevard Diderot, 75012 Paris');
        $place6->setTel('01 43 43 99 70');
        $place6->setUrlSite('http://www.l-europeen.com/');
        $place6->setHotel($this->getReference('hotel-aurore'));
        $place6->setPlaceType($this->getReference('placetype-gastronomie'));

        $place3 = new Place();
        $place3->setName('La Maison Rouge');
        $place3->setDescription('Établissement qui pèse de ouf - Jolan, 2014');
        $place3->setAddress('10 Boulevard de la Bastille, 75012 Paris');
        $place3->setTel('01 40 01 08 80');
        $place3->setUrlSite('http://www.lamaisonrouge.org');
        $place3->setHotel($this->getReference('hotel-aurore'));
        $place3->setPlaceType($this->getReference('placetype-culture'));
        $place7 = new Place();
        $place7->setName('La Maison Rouge');
        $place7->setDescription('Établissement qui pèse de ouf - Jolan, 2014');
        $place7->setAddress('10 Boulevard de la Bastille, 75012 Paris');
        $place7->setTel('01 40 01 08 80');
        $place7->setUrlSite('http://www.lamaisonrouge.org');
        $place7->setHotel($this->getReference('hotel-aurore'));
        $place7->setPlaceType($this->getReference('placetype-culture'));

        $place4 = new Place();
        $place4->setName('Piscine Joséphine Baker');
        $place4->setDescription('Une piscine parisienne sur une péniche, au milieu de la seine');
        $place4->setAddress('Port de la Gare, Quai François Mauriac, 75013 Paris');
        $place4->setTel('01 56 61 96 503');
        $place4->setUrlSite('http://carilis.fr');
        $place4->setHotel($this->getReference('hotel-aurore'));
        $place4->setPlaceType($this->getReference('placetype-sport'));
        $place8 = new Place();
        $place8->setName('Piscine Joséphine Baker');
        $place8->setDescription('Une piscine parisienne sur une péniche, au milieu de la seine');
        $place8->setAddress('Port de la Gare, Quai François Mauriac, 75013 Paris');
        $place8->setTel('01 56 61 96 503');
        $place8->setUrlSite('http://carilis.fr');
        $place8->setHotel($this->getReference('hotel-aurore'));
        $place8->setPlaceType($this->getReference('placetype-sport'));

        $objectManager->persist($place5);
        $objectManager->persist($place6);
        $objectManager->persist($place7);
        $objectManager->persist($place8);

        $objectManager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}