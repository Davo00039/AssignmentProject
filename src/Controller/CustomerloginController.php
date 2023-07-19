<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerloginController extends AbstractController
{
    #[Route('/customerlogin', name: 'app_customerlogin')]
    public function index(): Response
    {
        return $this->render('customerlogin/index.html.twig', [
            'controller_name' => 'CustomerloginController',
        ]);
    }
}
