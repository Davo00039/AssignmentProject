<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomeruserController extends AbstractController
{
    #[Route('/customeruser', name: 'app_customeruser')]
    public function index(): Response
    {
        return $this->render('customeruser/index.html.twig', [
            'controller_name' => 'CustomeruserController',
        ]);
    }
}
