<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Taxes\calculateur;

class testController extends AbstractController {

    #[Route('/test', name: 'test')]
   # protected $calcul;
    # function __construct()
  # {
  #     $this->calcul = new calculateur();
  # }

    function index(calculateur $calcul)
    {
        $mtTVA= $calcul->prixTVA(100);
        $mtTTc= $calcul->prixTTC(100);
        dd("bonjour votre montant TVA est : $mtTVA, le montant a payer est : $mtTTc");
        #dd=dump + die
    }
    #[Route('/test2')]
    function index2()
    {

        dd("bonjour ca fonctionne aussi");    
    }
    #[Route('/test3',name: 'test3')]
    function index3()
    {
        return $this->render('test\test3.html.twig');
    }
}