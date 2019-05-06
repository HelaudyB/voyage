<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */

    public function index()
    {
        return $this->render('default/base.html.twig', [
            'controller_name' => 'DefaultController',
            //'elodie' => $prenom,
            //'belguet' => $nom
        ]);
    }



    public function testTwig(){
        return $this->render('default/index.html.twig', []);
    }
}
