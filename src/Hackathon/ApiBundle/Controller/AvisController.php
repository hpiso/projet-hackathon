<?php

namespace Hackathon\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Hackathon\CoreBundle\Entity\Avis;

class AvisController extends FOSRestController
{

    /**
     * @param Avis $avis
     * @return Avis
     */
    public function getAviAction(Avis $avis)
    {
        return $avis;
    }

    /**
     * @return array
     */
    public function getAvisAction()
    {
        return $this->getDoctrine()->getManager()
            ->getRepository('HackathonCoreBundle:Avis')
            ->findAll();
    }
}
