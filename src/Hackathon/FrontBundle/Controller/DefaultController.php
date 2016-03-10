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

        if ($formAvis->getData()!=null) {
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
                $place = $repository->find($formAvis->getExtraData()['placeId']);


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
            }
        }


        return $this->render('HackathonFrontBundle:Default:index.html.twig', [
            'form'   => $formSearch->createView(),
            'hotel'  => $hotel,
            'places' => $places
        ]);
    }

    /**
     * @Route("/popup", name="popup-avis")
     */
    public function popupAction(Request $request)
    {
        $place_id = $request->request->get('place_id');

        $em = $this->getDoctrine()->getManager();
        $place = $em->getRepository('HackathonCoreBundle:Place')->find($place_id);
        $avis = $em->getRepository('HackathonCoreBundle:Avis')->findBy(['place'=>$place]);

        $formAvis = $this->createForm(new AvisType(), null);
        $formAvis->handleRequest($request);



        return $this->render('HackathonFrontBundle:Default:popup.html.twig', [
            'avis'      => $avis,
            'formAvis'  =>$formAvis->createView(),
            'placeId'   => $place_id
        ]);
    }
}
