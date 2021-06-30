<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'article')]
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    #[Route('/articles', name: 'articles')]

    public function threeLast(): Response
    {
        $articlesRepository = $this->getDoctrine()->getRepository(Article::class);
        $articles = $articlesRepository->findAll();
        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }

}
