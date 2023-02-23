<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    #[Route('/getarticle', name: 'getarticle')]
    public function index(): Response
    {
        return $this->render('article/liste.html.twig', [
            'controller_name' => 'ArticleController',
        ]);

    }

    #[Route('/remove', name: 'getarticle')]
    public function getarticle(ArticleRepository $repo): Response
    {
        return $this->render('article/liste.html.twig', [
            'articles' => $repo->findAll(),
        ]);

    }

    #[Route('/remove/{id}', name: 'remove3')]
    public function remove(ManagerRegister $mr, $id, ArticleRepository): Response
    {
        return $this->render('article/liste.html.twig', [
            'articles' => $repo->findAll(),
        ]);

    }




}
