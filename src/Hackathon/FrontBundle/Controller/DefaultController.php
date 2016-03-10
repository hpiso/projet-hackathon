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
        $form = $this->createForm(new FilterType(), null, array('action' => '#center_div'));
        $form->handleRequest($request);
        $hotel = null;
        $places = null;

        if ($form->isValid()) {
            $hotel = $form->getData()['Recherche'];

            $em = $this->getDoctrine()->getManager();
            $places = $em->getRepository('HackathonCoreBundle:Place')->findBy([
                'hotel' => $hotel
            ]);
        }

        return $this->render('HackathonFrontBundle:Default:index.html.twig', [
            'form'   => $form->createView(),
            'hotel'  => $hotel,
            'places' => $places
        ]);
    }
}
