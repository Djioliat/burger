<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }
    /**
     * Création d'un article
     *
     * @Route("/article/new", name="new_article")
     */
    public function create() : Response
    {
        $article = new Articles();

        $form = $this->createForm(ArticleType::class, $article);


        return $this->render('article/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
