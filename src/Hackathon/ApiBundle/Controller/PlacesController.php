<?php

namespace Hackathon\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Hackathon\CoreBundle\Entity\Avis;
use Hackathon\CoreBundle\Entity\Place;

class PlacesController extends FOSRestController
{

    /**
     * @param Place $place
     * @return mixed
     */
    public function getPlaceAction(Place $place)
    {
        return $place;
//
//        $place = [
//            'id' => $place->getId(),
//            'name' => $place->getName(),
//            'avis' => count($place->getAvis()),
//            'phone' => $place->getTel(),
//            'address' => $place->getAddress(),
//            'site' => $place->getUrlSite(),
//        ];
//
//        $view = View::create([], 200);
//        $view->setData($place);
//
//        $handler = $this->get('fos_rest.view_handler');
//
//        return $handler->handle($view);
    }

    /**
     * @return array
     */
    public
    function getPlacesAction()
    {
        $places = $this->getDoctrine()->getManager()
            ->getRepository('HackathonCoreBundle:Place')
            ->findAll();

        return $places;
//
//        foreach ($places as $key => $place)
//        {
//            $data[] = [
//                'id' => $place->getId(),
//                'name' => $place->getName(),
//                'hotel' =>
//                    [
//                        'id' => $place->getHotel()->getId(),
//                        'slug' => $place->getHotel()->getSlug()
//                    ],
//                'type' =>
//                    [
//                        'id' => $place->getPlaceType()->getId(),
//                        'name' => $place->getPlaceType()->getName(),
////                        'icon' => $place->getPlaceType()->getIcon(),
//                    ],
//                'avis' => count($place->getAvis())
////                'longitude' => $place->getLongitude(),
////                'latitude' => $place->getLatitude(),
//            ];
//        }
//
//        $view = View::create([], 200);
//        $view->setData([
//            'count' => count($places),
//            'places' => $data,
//        ]);
//
//        $handler = $this->get('fos_rest.view_handler');
//
//        return $handler->handle($view);
    }

    public function getPlaceAvisAction(Place $place)
    {
        return $place->getAvis();
//
//        foreach ($place->getAvis() as $avis)
//        {
//            /** @var $avis Avis */
//            $data[] = [
//                'id' => $avis->getId(),
//                'date' => $avis->getDate()->format('d/m/Y H:m:s'),
//                'commentaire' => $avis->getDescription(),
//                'note' => $avis->getNote(),
//            ];
//        }
//
//        $view = View::create([], 200);
//        $view->setData([
//            'count' => count($data),
//            'places' => $data,
//        ]);
//
//        $handler = $this->get('fos_rest.view_handler');
//
//        return $handler->handle($view);
    }
}
