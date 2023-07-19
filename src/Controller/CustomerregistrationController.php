<?php

namespace App\Controller;

use App\Entity\Customeruser;
use App\Form\CustomeruserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class CustomerregistrationController extends AbstractController
{
    #[Route('/customerregistration', name: 'app_customerregistration')]
    public function index(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $Customeruser = new Customeruser();
        $form = $this->createForm(CustomeruserType::class, $Customeruser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $Customeruser->setPassword(
                $userPasswordHasher->hashPassword(
                    $Customeruser,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($Customeruser);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('app_login');
        }

        return $this->render('customerregistration/index.html.twig', [
            'CustomeruserForm' => $form->createView(),
        ]);
    }
}
