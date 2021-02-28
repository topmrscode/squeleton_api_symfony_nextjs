<?php

namespace App\Repository;

use App\Entity\Cart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cart|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cart|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cart[]    findAll()
 * @method Cart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cart::class);
    }

    // create new cart
    public function createNewCart($user)
    {
        $cart = new Cart();
        $cart->setUser($user);
        $cart->setUpdatedAt(new \DateTime());


        $this->_em->persist($cart);
        $this->_em->flush(); 

        return $cart;
    }

    public function modifyProducts($cart, $id, $quantity)
    {
        $products = $cart->getProducts();
        // check to remove all products id corresponding to id
        $newProducts = [];
        foreach($products as $product) {
            if ($product != $id) {
                array_push($newProducts, $product);
            }
        }
        for ($i = 1; $i <= $quantity; $i++) {
            array_push($newProducts, $id);
        };
        sort($newProducts);
        $cart->setProducts($newProducts);

        $this->_em->flush();
        
    }

}
