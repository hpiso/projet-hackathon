<?php

namespace Hackathon\FrontBundle\Controller;

use Hackathon\CoreBundle\Form\FilterType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(new FilterType(), null);
        $form->handleRequest($request);
        $hotel = null;

        if ($form->isValid()) {
            $hotel = $form->getData();
        }

        return $this->render('HackathonFrontBundle:Default:index.html.twig', [
            'form' => $form->createView(),
            'hotel' => $hotel['Recherche']
        ]);
    }
}
