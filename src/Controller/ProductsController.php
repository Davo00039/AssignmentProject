<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SP;
use App\Entity\Category;
use App\Form\ProductsType;
use App\Form\SanPhamType;
use Doctrine\Persistence\ManagerRegistry;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class ProductsController extends AbstractController
{
    // #[Route('/products', name: 'app_products')]
    // public function index(): Response
    // {
    //     return $this->render('products/list.html.twig', [
    //         'controller_name' => 'ProductsController',
    //     ]);
    // }

    public function __construct(private UrlGeneratorInterface $urlGenerator)
        {
        }


    #[Route('/products', name: 'app_products')]
    public function list_sp(EntityManagerInterface $em): Response
    {
        $query = $em->createQuery('SELECT sp FROM App\Entity\SP sp');
        $lSp = $query->getResult();
        return $this->render('products/list.html.twig', [
            "data"=>$lSp
        ]);
    }

    // #[Route('/search', name: 'app_search')]
    // public function search(Request $request): Response
    // {
    //     $query = $request->query->get('query'); // Get the search query from the request parameters

    //     // Perform the search operation using the query
    //     // Replace this code with your actual search implementation
    //     $results = $this->getDoctrine()
    //         ->getRepository(SanPhamType::class)
    //         ->findBy(['name' => $query]);

    //     return $this->render('search/search.html.twig', [
    //         'results' => $results,
    //         'query' => $query,
    //     ]);
    // }

}














