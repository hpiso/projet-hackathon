<?php

namespace Hackathon\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Hackathon\CoreBundle\Entity\Hotel;

class HotelsController extends FOSRestController
{

    /**
     * @param Hotel $hotel
     * @return Hotel
     */
    public function getHotelAction(Hotel $hotel)
    {
        return $hotel;
    }

    /**
     * @return array
     */
    public function getHotelsAction()
    {
        return $this->getDoctrine()->getManager()
            ->getRepository('HackathonCoreBundle:Hotel')
            ->findAll();
    }

    public function getHotelPlacesAction(Hotel $hotel)
    {
//        return $hotel->getPlaces();
        $em = $this->getDoctrine()->getManager();
        $places = $em->getRepository('HackathonCoreBundle:Place')->findBy([
            'hotel' => $hotel
        ]);

        $datas = [];
        foreach ($places as $key => $place)
        {
            $datas[] = [
                'id' => $place->getId(),
                'name' => $place->getName(),
                'type' =>
                    [
                        'id' => $place->getPlaceType()->getId(),
                        'name' => $place->getPlaceType()->getName(),
                        'icon' => $place->getPlaceType()->getIcon(),
                    ],
                'longitude' => $place->getLongitude(),
                'latitude' => $place->getLatitude(),
            ];
        }

        $view = View::create([], 200);
        $view->setData([
            'count' => count($places),
            'places' => $datas,
        ]);

        $handler = $this->get('fos_rest.view_handler');

        return $handler->handle($view);
    }
}