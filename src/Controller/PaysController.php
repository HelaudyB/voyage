<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class PaysController extends AbstractController
{
    /**
     * @Route("/{_locale}/pays", name="pays")
     */
    public function index()
    {
        return $this->render('pays/index.html.twig', [
            'controller_name' => 'PaysController',
        ]);
    }

    public function homeAction(TranslatorInterface $translator, Request $request)
    {
        die(dump($translator->trans('all_articles')));
    }


}
