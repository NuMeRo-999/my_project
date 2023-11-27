<?php

namespace App\Controller;

use App\Entity\Shop;
use App\Repository\ShopRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(ShopRepository $shopRepository): Response
    {
        $shop = $shopRepository->find(1);
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'shop' => $shop
        ]);
    }
}
