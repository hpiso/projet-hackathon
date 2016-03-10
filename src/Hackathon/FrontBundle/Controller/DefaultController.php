<?php

namespace Hackathon\FrontBundle\Controller;

use Hackathon\CoreBundle\Entity\Avis;
use Hackathon\CoreBundle\Form\FilterType;
use Hackathon\CoreBundle\Form\AvisType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $formSearch = $this->createForm(new FilterType(), null, array('action' => '#center_div'));
        $formSearch->handleRequest($request);

        $formAvis = $this->createForm(new AvisType(), null);
        $formAvis->handleRequest($request);

        $hotel = null;
        $places = null;

        if ($formSearch->isValid()) {
            $hotel = $formSearch->getData()['Recherche'];

            $em = $this->getDoctrine()->getManager();
            $places = $em->getRepository('HackathonCoreBundle:Place')->findBy([
                'hotel' => $hotel
            ]);
        }

        if ($formAvis->isValid()) {
            $avis = new Avis();

            $data = $formAvis->getData();

            $avis->setDescription($data['Avis']);
            $avis->setNote($data['Note']);
            $avis->setDate(new \Datetime());


            try{
                $repository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('HackathonCoreBundle:Place')
                ;
                $place = $repository->find(10);

                $avis->setPlace($place);

                $em = $this->getDoctrine()->getManager();
                $em->persist($avis);

                $em->flush();

                $this->addFlash(
                    'notice',
                    'Votre avis a été ajouté !'
                );
            } catch(Exception $e) {

                $this->addFlash(
                    'Error',
                    'Votre avis n\'a pas été ajouté!'
                );
                die($e);
            }
            dump($hotel);die;
        }


        return $this->render('HackathonFrontBundle:Default:index.html.twig', [
            'form'   => $formSearch->createView(),
            'hotel'  => $hotel,
            'places' => $places,
            'formAvis' =>$formAvis->createView()
        ]);
    }
}
