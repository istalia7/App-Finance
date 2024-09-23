<?php

namespace App\Controller;

use App\Repository\RevenuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RevenuController extends AbstractController
{
    #[Route('/revenu', name: 'app_revenu')]
    public function index(RevenuRepository $revenuRepository): Response
    {
        $revenus = $revenuRepository->findAll();
        return $this->render('revenu/index.html.twig', [
            "revenus" => $revenus
        ]);
    }
}
