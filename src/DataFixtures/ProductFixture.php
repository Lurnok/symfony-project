<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Enum\StatusEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProductFixture extends Fixture implements DependentFixtureInterface
{

    private const PRODUCT_REFERENCE = 'product';
    private const IMAGE_REFERENCE = 'image';
    private const CATEGORY_REFERENCE = 'category';
    
    public function load(ObjectManager $manager): void
    {
        
        for ($i = 1; $i <= 120; $i++) {
            $product = new Product();
            $product->setName("cube_" . $i);
            $product->setDescription("Super produit !");
            $product->setPrice(random_int(1000,100000) / 100);
            $product->setStock(random_int(0,10000));
            $product->setImage($this->getReference(self::IMAGE_REFERENCE . '_' . $i));
            $categ = intdiv($i,10) + 1;
            $product->setCategory($this->getReference(self::CATEGORY_REFERENCE . '_' . $categ));
            $product->setStatus(StatusEnum::disponible);
            $product->setWca(false);
            $manager->persist($product);
            $this->addReference(self::PRODUCT_REFERENCE . '_' . $i, $product);
        }


        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixture::class,
            ImageFixtures::class,
        ];
    }
}
