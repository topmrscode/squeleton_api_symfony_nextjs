<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Psr\Log\LoggerInterface;

class ProductController extends ApiController
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository,  LoggerInterface $logger)
    {
        $this->productRepository = $productRepository;
        $this->logger = $logger;
    }


    public function create(Request $request)
    {
        $ERROR_TITLE = 'Vous devez indiquer un titre pour ce produit';
        $ERROR_DESCRIPTION = 'Vous devez indiquer une description pour ce produit';
        $ERROR_PRICE = 'Vous devez indiquer un prix pour ce produit';
        $ERROR_IMAGE_URL = 'Vous devez indiquer une image pour pour ce produit';
        $ERROR_ENTITY_ALREADY_EXIST = 'Un produit existe deja avec ce titre';

        $title = $request->get('title');
        $description = $request->get('description');
        $price = $request->get('price');
        $imageUrl =  $request->files->get('imageUrl');

        // validate the fields
        if (!$title) {
            return $this->respondValidationError($ERROR_TITLE);
        }
        if (!$description) {
            return $this->respondValidationError($ERROR_DESCRIPTION);
        }
        if (!$price) {
            return $this->respondValidationError($ERROR_PRICE);
        }
        if (!$imageUrl) {
            return $this->respondValidationError($ERROR_IMAGE_URL);
        }

        $newProductData['title']    = $title;
        $newProductData['description'] = $description;
        $newProductData['price'] = $price;
        $newProductData['imageUrl'] = $imageUrl;

        // verify if product already exist 
        $product = $this->productRepository->getProductByTitle($title);
        if ($product != null) {
            return $this->respondValidationError($ERROR_ENTITY_ALREADY_EXIST);
        };
        // save product
        $newProduct = $this->productRepository->createNewProduct($newProductData);
        return $this->respondCreated(['_id' => $newProduct->getId(), 'title' => $newProduct->getTitle(), 'description' => $newProduct->getDescription(), 'price' => $newProduct->getPrice(), 'imageUrl' => $newProduct->getImageUrl()]);
    }

    public function list()
    {
        $products = $this->productRepository->listProducts();
        $resp = array();
        foreach ($products as $p) {
            array_push($resp, $p->serialize());
        }
        return $this->respond($resp);
    }


   
}

