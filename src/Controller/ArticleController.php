<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index()
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }
    public function add(){
        $entityManager = $this->getDoctrine()->getManager();

        $article = new Article();
        $article->setTitre('Premier Article');
        $article->setContenu('Bienvenue dans notre premier article');
        $entityManager->persist($article);
        $entityManager->flush();
        return $this->render('article/index.html.twig', [
            'article' => $article,
        ]);

    }
}
