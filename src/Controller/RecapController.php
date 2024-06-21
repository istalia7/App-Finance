<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RecapController extends AbstractController
{
    #[Route('/', name: 'app_recap')]
    public function index(): Response
    {
        return $this->render('recap/index.html.twig', [
            'controller_name' => 'RecapController',
        ]);
    }
}
