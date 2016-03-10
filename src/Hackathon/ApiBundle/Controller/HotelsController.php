<?php

namespace Hackathon\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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
        return $this->getDoctrine()->getManager()
            ->getRepository('HackathonCoreBundle:Place')
            ->findAll();
    }
}