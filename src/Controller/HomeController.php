<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route(['/', '/index'], name: 'app_home')]
    public function index(CategorieRepository $repo): Response
    {
        $categories = $repo->findAll();
        return $this->render('home/index.html.twig', [
            'categories' => $categories
        ]);
    }
}