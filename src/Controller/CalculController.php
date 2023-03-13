<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/calcul/{a}/{b}', name: 'somme')]
    public function somme($a, $b): Response
    {
            $res = $a + $b;
        return $this->render('calcul\some.html.twig',['a'=>$a,'b'=>$b,'res'=>$res]);
    }
    #[Route('/calcul/soustraction/{a}/{b}', name: 'soustraction')]
    public function soustraction($a, $b): Response
    {
        $res = $a - $b;
        return $this->render('calcul\soustraction.html.twig',['a'=>$a,'b'=>$b,'res'=>$res]);
    }
    #[Route('/calcul/acceuil', name: 'acceuil')]
    public function acceuil(): Response
    {
        return $this->render('calcul/acceuil.html.twig');
    }


}
