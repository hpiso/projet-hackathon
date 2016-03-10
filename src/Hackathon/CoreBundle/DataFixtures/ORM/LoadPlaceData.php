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
        $place->setLatitude(48.856614);
        $place->setLongitude(2.3522219000000177);
        $place->setDescription('Un café ou des chats se promènent en liberté');
        $place->setAddress('9 Rue Sedaine, 75011 Paris');
        $place->setTel('09 73 53 35 81');
        $place->setUrlSite('http://www.lecafedeschats.fr');
        $place->setHotel($this->getReference('hotel-bastille'));
        $place->setPlaceType($this->getReference('placetype-bar'));
        $this->addReference('place-chat',$place);

        $place2 = new Place();
        $place2->setName('Chez Janou');
        $place2->setLatitude(48.85656609999999);
        $place2->setLongitude(2.3673096999999643);
        $place2->setDescription('Autour d\'un comptoir central, ce bistrop provençal avec terrasse propose une carte sobre et plus de 80 pastis');
        $place2->setAddress('2 Rue Roger Verlomme, 75003 Paris');
        $place2->setTel('01 42 72 28 41');
        $place2->setUrlSite('http://www.chezjanou.com');
        $place2->setHotel($this->getReference('hotel-bastille'));
        $place2->setPlaceType($this->getReference('placetype-gastronomie'));
        $this->addReference('place-janou',$place2);

        $place3 = new Place();
        $place3->setName('Comédie Bastille');
        $place3->setLatitude(48.8588897);
        $place3->setLongitude(2.3702562999999373);
        $place3->setDescription('Ce théâtre, ancien atelier de menuiserie, accueille comédies, one-man-shows et concerts pour enfants.');
        $place3->setAddress('5 Rue Nicolas Appert, 75011 Paris');
        $place3->setTel('01 48 07 52 07');
        $place3->setUrlSite('http://www.comedie-bastille.com');
        $place3->setHotel($this->getReference('hotel-bastille'));
        $place3->setPlaceType($this->getReference('placetype-culture'));
        $this->addReference('place-comedie',$place3);

        $place4 = new Place();
        $place4->setName('Piscine de la Cour des Lions');
        $place4->setLatitude(48.86065929999999);
        $place4->setLongitude(2.3703734000000622);
        $place4->setDescription('Une piscine parisienne classique');
        $place4->setAddress('9 Rue Alphonse Baudin, 75011 Paris');
        $place4->setTel('01 43 55 09 23');
        $place4->setUrlSite('http://equipement.paris.fr');
        $place4->setHotel($this->getReference('hotel-bastille'));
        $place4->setPlaceType($this->getReference('placetype-sport'));
        $this->addReference('place-lions',$place4);

        $objectManager->persist($place);
        $objectManager->persist($place2);
        $objectManager->persist($place3);
        $objectManager->persist($place4);

        /********************************************************************/

        $place5 = new Place();
        $place5->setName('L\'Express de Lyon');
        $place5->setDescription('Café-bar au cadre sobre et convivial, réputé pour sa sélection de bières pression et ses plats typiques.');
        $place5->setAddress('1 Rue de Lyon, 75012 Paris');
        $place5->setTel('01 43 43 21 32');
        $place5->setUrlSite('');
        $place5->setHotel($this->getReference('hotel-aurore'));
        $place5->setPlaceType($this->getReference('placetype-bar'));
        $this->addReference('place-express',$place5);

        $place6 = new Place();
        $place6->setName('L\'Européen');
        $place6->setDescription('Brasserie au décor rétro et design, avec lustres en verrine et miroirs, spécialisée dans les fruits de mer.');
        $place6->setAddress('21 bis Boulevard Diderot, 75012 Paris');
        $place6->setTel('01 43 43 99 70');
        $place6->setUrlSite('http://www.l-europeen.com/');
        $place6->setHotel($this->getReference('hotel-aurore'));
        $place6->setPlaceType($this->getReference('placetype-gastronomie'));
        $this->addReference('place-europeen',$place6);

        $place7 = new Place();
        $place7->setName('La Maison Rouge');
        $place7->setDescription('Établissement qui pèse de ouf - Jolan, 2014');
        $place7->setAddress('10 Boulevard de la Bastille, 75012 Paris');
        $place7->setTel('01 40 01 08 80');
        $place7->setUrlSite('http://www.lamaisonrouge.org');
        $place7->setHotel($this->getReference('hotel-aurore'));
        $place7->setPlaceType($this->getReference('placetype-culture'));
        $this->addReference('place-maison',$place7);

        $place8 = new Place();
        $place8->setName('Piscine Joséphine Baker');
        $place8->setDescription('Une piscine parisienne sur une péniche, au milieu de la seine');
        $place8->setAddress('Port de la Gare, Quai François Mauriac, 75013 Paris');
        $place8->setTel('01 56 61 96 503');
        $place8->setUrlSite('http://carilis.fr');
        $place8->setHotel($this->getReference('hotel-aurore'));
        $place8->setPlaceType($this->getReference('placetype-sport'));
        $this->addReference('place-baker',$place8);

        $objectManager->persist($place5);
        $objectManager->persist($place6);
        $objectManager->persist($place7);
        $objectManager->persist($place8);

        /********************************************************************/

        $place9 = new Place();
        $place9->setName('Le Joinville');
        $place9->setDescription('Bar traditionnel Normand');
        $place9->setAddress('4 Boulevard Fernand Moureaux, 14360 Trouville-sur-Mer');
        $place9->setTel('02 31 88 02 54');
        $place9->setUrlSite('');
        $place9->setHotel($this->getReference('hotel-vallon'));
        $place9->setPlaceType($this->getReference('placetype-bar'));
        $this->addReference('place-joinville',$place9);

        $place10 = new Place();
        $place10->setName('La Taverne du Port');
        $place10->setDescription('Restaurant traditionnel Normand');
        $place10->setAddress('18 Boulevard Fernand Moureaux, 14360 Trouville-sur-Mer');
        $place10->setTel('02 31 88 38 67');
        $place10->setUrlSite('');
        $place10->setHotel($this->getReference('hotel-vallon'));
        $place10->setPlaceType($this->getReference('placetype-gastronomie'));
        $this->addReference('place-taverne',$place10);

        $place11 = new Place();
        $place11->setName('Église Notre-Dame');
        $place11->setDescription('Établissement de culte qui pèse de ouf - Jolan, 2014');
        $place11->setAddress('9 Place Notre Dame, 14360 Trouville-sur-Mer');
        $place11->setTel('');
        $place11->setUrlSite('');
        $place11->setHotel($this->getReference('hotel-vallon'));
        $place11->setPlaceType($this->getReference('placetype-culture'));
        $this->addReference('place-eglise',$place11);

        $place12 = new Place();
        $place12->setName('Tennis Sporting-Club de Deauville');
        $place12->setDescription('Un club de tennis très réputé');
        $place12->setAddress('Boulevard de la Mer, 14800 Deauville');
        $place12->setTel('02 31 14 02 18');
        $place12->setUrlSite('http://sc-deauville.clubeo.com/');
        $place12->setHotel($this->getReference('hotel-vallon'));
        $place12->setPlaceType($this->getReference('placetype-sport'));
        $this->addReference('place-tennis',$place12);

        $objectManager->persist($place9);
        $objectManager->persist($place10);
        $objectManager->persist($place11);
        $objectManager->persist($place12);

        $objectManager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}