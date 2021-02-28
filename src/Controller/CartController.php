<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CartRepository;
use App\Repository\ProductRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;

class CartController extends ApiController
{
    private $cartRepository;
    private $productRepository;

    public function __construct(CartRepository $cartRepository, ProductRepository $productRepository, LoggerInterface $logger)
    {
        $this->cartRepository = $cartRepository;
        $this->productRepository = $productRepository;
        $this->logger = $logger;
    }

    public function modifyProducts(Request $request)
    {
        $ERROR_ENTITY_NOT_FOUND = 'Aucun produit trouvé';
        $id = $request->get('id');
        $quantity = $request->get('quantity');

        // verify if product exist
        $existedProduct = $this->productRepository->getProductById($id);
        if($existedProduct == null){
            return $this->respondValidationError($ERROR_ENTITY_NOT_FOUND);
        }
        $cart =  $this->getUser()->getCart();
        // add/delete products to cart
        $this->cartRepository->modifyProducts($cart,$id, (int)$quantity);

        $user = $this->getUser()->serialize();
        return $this->respond($user);

    }
}
