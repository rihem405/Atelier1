<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/list', name: 'list_blog')]
    public function list(): Response
    {
        return new Response('<H1> Liste des articles </H1>');
    }

    #[Route('/blog/detail/{id<\d+>?1}', name: 'show_blog')]
    public function show($id): Response
    {
        $name='Introduction au symfony';
        return $this->render('blog\show.html.twig',['a'=>$id,'b'=>$name]);

    }
    #[Route('/blog/detail/{id<\d+>}/{name?vide}', name: 'detail_blog', priority:1)]
    public function detail($id,$name): Response
    {
        return $this->render('blog\detail.html.twig',['a'=>$id,'b'=>$name]);
        
    }
    #[Route('/blog/test', name: 'test_blog')]
    public function someMethod(): Response
    {
        #$url = $this->generateUrl('detail_blog',['id'=>100,'name'=>'base de donnees']);
        #dd($url);
        #return $this->redirect($url);
        return $this->redirectToRoute('detail_blog',['id'=>100,'name'=>'base-de-donnees']);
    }
}
