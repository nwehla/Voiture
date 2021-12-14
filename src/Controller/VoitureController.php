<?php

namespace App\Controller;

use App\Repository\VoitureRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VoitureController extends AbstractController
{
    /**
     * @Route("/client/voitures", name="voitures")
     */
    public function index(VoitureRepository $repo,PaginatorInterface $pagi,Request $request): Response
    {
        $pagi = 
        $voitures = $pagi->paginate(
            $repo->findAllWithPagination(),
             $request->query->getINt('page',1),6
                
            );
            return $this->render("voiture/voiture.html.twig",[
                "voitures" => $voitures
            
        ]);
    }
}
