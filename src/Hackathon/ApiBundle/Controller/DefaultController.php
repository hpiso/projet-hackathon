<?php

namespace Hackathon\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends FOSRestController
{
    /**
     * @Route("/")
     */
    public function getUserIndexAction()
    {
        return $this->render('HackathonApiBundle:Default:index.html.twig');
    }
}
