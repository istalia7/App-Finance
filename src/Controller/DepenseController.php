<?php

namespace App\Controller;

use App\Repository\DepenseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DepenseController extends AbstractController
{
    #[Route('/depense', name: 'app_depense')]
    public function index(DepenseRepository $depenseRepository): Response
    {
        $depenses = $depenseRepository->findBy([], ['date' => 'ASC']);
        return $this->render('depense/index.html.twig', [
            'depenses' => $depenses,
        ]);
    }
}
