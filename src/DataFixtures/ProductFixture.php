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

        $product = new Product();
        $product->setName("YJ MGC 2x2 Magnetic");
        $product->setDescription("Super produit !");
        $product->setPrice(9.29);
        $product->setStock(100);
        $product->setImage($this->getReference(self::IMAGE_REFERENCE . '_1'));
        $product->setCategory($this->getReference(self::CATEGORY_REFERENCE . '_1'));
        $product->setStatus(StatusEnum::disponible);
        $product->setWca(true);
        $manager->persist($product);
        $this->addReference(self::PRODUCT_REFERENCE . '_1', $product);

        $product = new Product();
        $product->setName("QiYi MS 2x2 Magnetic");
        $product->setDescription("Super produit !");
        $product->setPrice(6.49);
        $product->setStock(100);
        $product->setImage($this->getReference(self::IMAGE_REFERENCE . '_2'));
        $product->setCategory($this->getReference(self::CATEGORY_REFERENCE . '_1'));
        $product->setStatus(StatusEnum::disponible);
        $product->setWca(true);
        $manager->persist($product);
        $this->addReference(self::PRODUCT_REFERENCE . '_2', $product);

        $product = new Product();
        $product->setName("YuXin Little Magic 2x2");
        $product->setDescription("Super produit !");
        $product->setPrice(2.79);
        $product->setStock(100);
        $product->setImage($this->getReference(self::IMAGE_REFERENCE . '_3'));
        $product->setCategory($this->getReference(self::CATEGORY_REFERENCE . '_1'));
        $product->setStatus(StatusEnum::disponible);
        $product->setWca(true);
        $manager->persist($product);
        $this->addReference(self::PRODUCT_REFERENCE . '_3', $product);

        $product = new Product();
        $product->setName("MoFang JiaoShi MeiLong 2x2");
        $product->setDescription("Super produit !");
        $product->setPrice(3.69);
        $product->setStock(100);
        $product->setImage($this->getReference(self::IMAGE_REFERENCE . '_4'));
        $product->setCategory($this->getReference(self::CATEGORY_REFERENCE . '_1'));
        $product->setStatus(StatusEnum::disponible);
        $product->setWca(true);
        $manager->persist($product);
        $this->addReference(self::PRODUCT_REFERENCE . '_4', $product);

        $product = new Product();
        $product->setName("DaYan TengYun 2x2 Magnetic");
        $product->setDescription("Super produit !");
        $product->setPrice(13.07);
        $product->setStock(100);
        $product->setImage($this->getReference(self::IMAGE_REFERENCE . '_5'));
        $product->setCategory($this->getReference(self::CATEGORY_REFERENCE . '_1'));
        $product->setStatus(StatusEnum::disponible);
        $product->setWca(true);
        $manager->persist($product);
        $this->addReference(self::PRODUCT_REFERENCE . '_5', $product);

        $product = new Product();
        $product->setName("MoYu RS2 M Evolution 2x2 Magnetic");
        $product->setDescription("Super produit !");
        $product->setPrice(9.29);
        $product->setStock(100);
        $product->setImage($this->getReference(self::IMAGE_REFERENCE . '_6'));
        $product->setCategory($this->getReference(self::CATEGORY_REFERENCE . '_1'));
        $product->setStatus(StatusEnum::disponible);
        $product->setWca(true);
        $manager->persist($product);
        $this->addReference(self::PRODUCT_REFERENCE . '_6', $product);

        $product = new Product();
        $product->setName("GAN 251 2x2 Magnetic Pro");
        $product->setDescription("Super produit !");
        $product->setPrice(30.78);
        $product->setStock(100);
        $product->setImage($this->getReference(self::IMAGE_REFERENCE . '_7'));
        $product->setCategory($this->getReference(self::CATEGORY_REFERENCE . '_1'));
        $product->setStatus(StatusEnum::disponible);
        $product->setWca(true);
        $manager->persist($product);
        $this->addReference(self::PRODUCT_REFERENCE . '_7', $product);

        $product = new Product();
        $product->setName("DianSheng 2x2 Magnetic");
        $product->setDescription("Super produit !");
        $product->setPrice(3.73);
        $product->setStock(100);
        $product->setImage($this->getReference(self::IMAGE_REFERENCE . '_8'));
        $product->setCategory($this->getReference(self::CATEGORY_REFERENCE . '_1'));
        $product->setStatus(StatusEnum::disponible);
        $product->setWca(true);
        $manager->persist($product);
        $this->addReference(self::PRODUCT_REFERENCE . '_8', $product);

        $product = new Product();
        $product->setName("JPerm MGC 2x2 Magnetic");
        $product->setDescription("Super produit !");
        $product->setPrice(24.74);
        $product->setStock(100);
        $product->setImage($this->getReference(self::IMAGE_REFERENCE . '_9'));
        $product->setCategory($this->getReference(self::CATEGORY_REFERENCE . '_1'));
        $product->setStatus(StatusEnum::disponible);
        $product->setWca(true);
        $manager->persist($product);
        $this->addReference(self::PRODUCT_REFERENCE . '_9', $product);

        for ($i = 10; $i <= 120; $i++) {
            $product = new Product();
            $product->setName("cube_" . $i);
            $product->setDescription("Super produit !");
            $product->setPrice(random_int(1000, 100000) / 100);
            $product->setStock(random_int(0, 10000));
            $product->setImage($this->getReference(self::IMAGE_REFERENCE . '_' . $i));
            $categ = intdiv($i, 10) + 1;
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
