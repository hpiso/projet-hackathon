<?php

namespace Hackathon\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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
    }

    /**
     * @return array
     */
    public function getPlacesAction()
    {
        return $this->getDoctrine()->getManager()
            ->getRepository('HackathonCoreBundle:Place')
            ->findAll();
    }
}
