<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Service\ImageUploader;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    private $imageUploader;
    public function __construct(ManagerRegistry $registry, ImageUploader $imageUploader)
    {
        parent::__construct($registry, Product::class);
        $this->imageUploader = $imageUploader;
    }

    // /**
    //  * @return Product[] Returns an array of Product objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */


    public function createNewProduct($data)
    {
        $product = new Product();
        $product->setTitle($data['title']);
        $product->setDescription($data['description']);
        $product->setPrice($data['price']);
        $product->setImageUrl($this->imageUploader->uploadImageToCloudinary($data['imageUrl']));


        $this->_em->persist($product);
        $this->_em->flush();
        return $product;
    }


    public function getProductByTitle($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.title = :title')
            ->setParameter('title', $value)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function listProducts()
    {

        return $this->findAll();
    }
}
