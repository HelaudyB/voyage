<?php

namespace App\Controller;

use App\Entity\Destination;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class DestinationController extends AbstractController
{
    /**
     * @Route("/{_locale}/destination{lieu}", name="destination_detail")
     */

    public function detail($lieu)
    {
        return $this->render('destination/destination-detail.html.twig', [
            'controller_name' => 'DestinationController',
            'destination'=> $lieu
        ]);
    }

    /**
     * @Route("/destination", name="destination")
     */
    public function index(){
        return $this->render('destination/index.html.twig', [
           'controller_name'=>'DestinationController'
        ]);

    }
    /**
     * @Route("/add", name="add")
     */
    public function addDestination(Request $request){
        $entityManager = $this->getDoctrine()->getManager();

        $destination = new Destination();
        $destination->setName('Premier Article');
        $destination->setPays('Bienvenue dans notre premier article');
        $destination->setImage('Bienvenue dans notre premier article');

        $entityManager->persist($destination);
        $entityManager->flush();
        return $this->render('article/index.html.twig', [
            'article' => $destination,
        ]);

    }
    public function homeAction(TranslatorInterface $translator, Request $request)
    {
        die(dump($translator->trans('all_articles')));
    }

}
