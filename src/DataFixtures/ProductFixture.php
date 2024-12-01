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

        $products = [
            [
                'name' => 'MoYu RS3 M 2020 3x3 (Magnetic)',
                'description' => 'MoYu RS3 M 2020 3x3 (Magnetic) is arguably the best bang for your buck and is no surprise that it is our best-selling speed cube.',
                'price' => 7.3,
                'stock' => 100,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'JPerm RS3 M 2020 3x3 (Magnetic)',
                'description' => 'Love JPerm? Now you can get a replica of his main speed cube, the MoYu RS3 M 2020 3x3 Magnetic, and support the JPerm YouTube Channel at the same time!',
                'price' => 20.38,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'GAN 11 Pro 3x3 (Magnetic)',
                'description' => 'GAN 11 Pro 3x3 Magnetic (Frosted) is GAN cube\'s 2020 flagship model and has continued to be the choice of many speedcubers since its release.',
                'price' => 32.61,
                'stock' => 0,
                'status' => StatusEnum::preco,
                'wca' => true,
            ],
            [
                'name' => 'YuXin Little Magic 3x3',
                'description' => 'YuXin Little Magic 3x3 has stood the test of time and is still the preferred choice of some beginners after its release in 2017.',
                'price' => 4.86,
                'stock' => 1000,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoYu RS3 M 2021 3x3 (Magnetic, MagLev)',
                'description' => 'MoYu RS3 M 2021 3x3 Magnetic (MagLev) is an update of our best-selling 3x3 -- the RS3 M 2020.',
                'price' => 11.38,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'GAN 356 3x3 (Magnetic)',
                'description' => 'GAN 356 3x3 (Magnetic) (356M) is the perfect middle-ground between the top 3x3 models! While the magnet strength is not adjustable you will still find plenty of adjustment options through the dual-adjustment Numerical IPG core and alternate GES spring options.',
                'price' => 19.18,
                'stock' => 100,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoYu WeiLong WR M 2021 3x3 (Magnetic, MagLev)',
                'description' => 'MoYu WeiLong WR M 2021 3x3 (Magnetic, MagLev) offers new updates over the 2020 version, for less!',
                'price' => 22.06,
                'stock' => 18,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'QiYi Thunderclap V3 3x3 (Magnetic)',
                'description' => 'QiYi Thunderclap V3 3x3 Magnetic is the best value speedcube we have ever seen released from QiYi! The V3 M includes several key features that allow it to compete with mid-range speedcubes.',
                'price' => 8.12,
                'stock' => 59,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'YJ MGC Elite V2 3x3 (Magnetic)',
                'description' => 'YJ MGC Elite V2 3x3 Magnetic is a huge advancement to the MGC line of affordable speedcubes! The addition of features such as the spring compression system and adjustable magnets to a speedcube that is less than $25 is quite impressive! For the price, it is hard to go wrong with the MGC Elite.',
                'price' => 11.50,
                'stock' => 1,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoFang JiaoShi MeiLong 3x3',
                'description' => 'The MoFang JiaoShi MeiLong 3x3 is a fantastic option for someone looking for a lower priced speedcube! The turning is smooth and the stable mechanism responds well to speedsolving!',
                'price' => 3.22,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'YJ MGC 4x4 Magnetic',
                'description' => 'YJ MGC 4x4 Magnetic is the first 4x4 in the MGC line! If you are a fan of fast turning, the MGC 4x4 is definitely for you! The turning is incredibly smooth and the outer edge pieces are widened to improve stability. The mechanism provides a lot of flex and has a very loose feel out of the box.',
                'price' => 16.30,
                'stock' => 100,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoYu MeiLong 4x4 (Magnetic)',
                'description' => 'MoYu MeiLong 4x4 Magnetic has remained one of the most popular 4x4s since its release in 2020.',
                'price' => 8.93,
                'stock' => 60,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'QiYi MS 4x4 (Magnetic)',
                'description' => 'QiYi MS 4x4 Magnetic Speedcube is a part of the new budget "MS" series! The MS series really took us by surprise as the amount of performance that you are getting for the price is an INSANE value. The turning of this 4x4 is very smooth and the moderate magnets do a great job of preventing lock-ups and overturning.',
                'price' => 9.75,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'YJ ZhiSu Mini 56mm 4x4 (Magnetic)',
                'description' => 'YJ ZhiSu Mini 56mm 4x4 (Magnetic) is the industry\'s first mini 4x4 that performs well! The ZhiSu is incredibly impressive and feels just like a mini MGC 4x4. The factory-installed magnets feel great and have the same moderate strength throughout the inner and outer layers, and the corner cutting is incredible at almost 45 degrees, which is substantially more than a standard 4x4.',
                'price' => 11.38,
                'stock' => 21,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoFang JiaoShi MeiLong 4x4',
                'description' => 'The MoFang JiaoShi MeiLong 4x4 is a part of the newest entry level series of speedcubes from MoFang JiaoShi. The MeiLong has a sturdy, smooth feel accompanied with a vibrant, scratch resistant color scheme. With proper set up, the MeiLong is a great option!',
                'price' => 5.75,
                'stock' => 100,
                'status' => StatusEnum::preco,
                'wca' => true,
            ],
            [
                'name' => 'MoYu AoSu WR M 4x4 (Magnetic)',
                'description' => 'MoYu AoSu WR M 4x4 Magnetic is MoYu\'s 2019 flagship featuring some key features. Some of our favorites are the new compact size, upgraded positioning system, new half-bright stickerless shades (Stickerless model only) and moderate strength magnets. The performance of the AoSu WR M is unbelievable. Silky smooth turning and a high corner cutting tolerance combined with a compact, stable core make for a truly amazing solving experience. The addition of factory-installed magnets adds to the stability and control that the AoSu WR M offers.',
                'price' => 35.03,
                'stock' => 201,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoYu RS4 M 4x4 (Magnetic)',
                'description' => 'J\'ai oublié de la copier celle là ptdr j\ai la flemme de la chercher maintenant',
                'price' => 12.20,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'GAN 460 4x4 (Magnetic)',
                'description' => 'GAN 460 4x4 Magnetic is a groundbreaking new release from GAN Cube and features an all-new magnetic positioning system. The 460 is most recognized for its outer layers that turn almost identically to any modern 3x3.',
                'price' => 44.82,
                'stock' => 1,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'X-Man Ambition 4x4 (Magnetic)',
                'description' => 'X-Man Ambition 4x4 Magnetic is the 2021 flagship and is a welcomed refresh from X-Man Designs!',
                'price' => 24.43,
                'stock' => 100,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'DianSheng 4x4 (Magnetic)',
                'description' => 'The DianSheng 4x4 Magnetic is a part of a new magnetic budget series that has put DianSheng back on the map for speed cubes!',
                'price' => 7.67,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'YJ MGC 5x5 (Magnetic)',
                'description' => 'YJ MGC 5x5 Magnetic is the continuation of the popular MGC series! In true MGC fashion, the MGC 5x5 performs so well, it is hard to believe that it is so inexpensive!',
                'price' => 17.90,
                'stock' => 100,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoYu MeiLong 5x5 (Magnetic)',
                'description' => 'MoYu MeiLong 5x5 Magnetic has remained one of the most popular 5x5s since its release in 2020.',
                'price' => 9.75,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'QiYi MS 5x5 (Magnetic)',
                'description' => 'QiYi MS 5x5 Magnetic Speedcube is a part of the new budget "MS" series! The MS series really took us by surprise as the amount of performance that you are getting for the price is an INSANE value. The turning of this 5x5 is very smooth and the moderate magnets do a great job of preventing lock-ups and overturning.',
                'price' => 11.50,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'MoFang JiaoShi MeiLong 5x5',
                'description' => 'The MoFang JiaoShi MeiLong 5x5 is a part of the newest entry level series of speedcubes from MoFang JiaoShi. The MeiLong has a sturdy, smooth feel accompanied with a vibrant, scratch resistant color scheme. With proper set up, the MeiLong is a great option!',
                'price' => 6.49,
                'stock' => 100,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'YJ ZhiChuang Mini 58mm 5x5 (Magnetic)',
                'description' => 'YJ ZhiChuang Mini 58mm 5x5 (Magnetic) is a smooth turning mini 5x5 that also features great corner cutting and stability. This item comes with factory-installed moderate strength magnets that feel consistent throughout the inner and outer layers.',
                'price' => 12.20,
                'stock' => 250,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoYu AoChuang WR M 5x5 (Magnetic)',
                'description' => 'MoYu AoChuang WR M 5x5 Magnetic is a major update to MoYu\'s 5x5 lineup! The buttery, fast, turning is very controllable and is complimented by factory-installed moderate strength magnets. The AoChuang WR M\'s confidence-inspiring, stable design makes speedsolving a breeze -- your records won\'t stand a chance!',
                'price' => 24.94,
                'stock' => 140,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'DianSheng 5x5 (Magnetic)',
                'description' => 'DianSheng 5x5 Magnetic is a part of a new magnetic budget series that has put DianSheng back on the map for speed cubes!',
                'price' => 7.67,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'JPerm MGC 5x5 (Magnetic)',
                'description' => 'Love JPerm? Now you can get a replica of his main speed cube, the YJ MGC 5x5 Magnetic, and support the JPerm YouTube Channel at the same time!',
                'price' => 32.61,
                'stock' => 366,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'GAN 562 5x5 (Magnetic, UV Coated)',
                'description' => 'GAN 562 5x5 Magnetic (Standard) adopts technology previously found exclusively in GAN 2x2 and 3x3, making this a top choice for speedcubers.',
                'price' => 57.05,
                'stock' => 100,
                'status' => StatusEnum::preco,
                'wca' => true,
            ],
            [
                'name' => 'QiYi MP 5x5 (Magnetic)',
                'description' => 'QiYi MP 5x5 Magnetic is part of QiYi\'s new mid-range series.',
                'price' => 21.17,
                'stock' => 45,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'YJ MGC 6x6 (Magnetic)',
                'description' => 'YJ MGC 6x6 Magnetic is easily the best value 6x6 available today!',
                'price' => 20.35,
                'stock' => 100,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'YJ YuShi V2 6x6 (Magnetic)',
                'description' => 'YJ YuShi V2 6x6 Magnetic makes getting into 6x6 easier than ever before! Pushing the limits of what a low-cost, magnetic 6x6 can do, the YuShi V2 does not disappoint.',
                'price' => 13.01,
                'stock' => 120,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'YuXin Little Magic 6x6',
                'description' => 'The YuXin Little Magic series is known for offering great performance for a fraction of the price. The Little Magic 6x6 follows suit and is an absolute bargain! The turning of this item is smooth and gets slightly slower from the outer layers to the inner layers for maximum control.',
                'price' => 12.20,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'MoYu AoShi WR M 6x6 (Magnetic)',
                'description' => 'MoYu AoShi WR M 6x6 Magnetic is the result of a focus on a lightweight yet stable design.',
                'price' => 35.85,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'QiYi QiFan S2 6x6',
                'description' => 'The QiYi QiFan S2 6x6 is an improved version of QiYi\'s budget 6x6! The QiFan S2 is exceptionally stable and the turning is very controllable which helps prevent overturning and headaches!',
                'price' => 7.67,
                'stock' => 1200,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'DianSheng 6x6 (Magnetic)',
                'description' => 'DianSheng 6x6 Magnetic is a nice option for speedcubers who are looking for a more stable feel.',
                'price' => 16.27,
                'stock' => 134,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoYu MeiLong 6x6 V2 (Magnetic)',
                'description' => 'MoYu MeiLong 6x6 V2 (Magnetic) is a great choice if you are looking for a 6x6 and don\'t want to break the bank!',
                'price' => 13.42,
                'stock' => 5,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'X-Man Shadow V2 6x6 (Magnetic)',
                'description' => 'The X-Man Shadow V2 6x6 Magnetic is the new and improved version of the once ground-breaking, Shadow V1.',
                'price' => 36.66,
                'stock' => 500,
                'status' => StatusEnum::preco,
                'wca' => true,
            ],
            [
                'name' => 'JPerm MGC 6x6 (Magnetic)',
                'description' => 'Love JPerm? Now you can get a replica of his main speed cube, the YJ MGC 6x6 Magnetic, and support the JPerm YouTube Channel at the same time!',
                'price' => 35.06,
                'stock' => 312,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoYu MeiLong 6x6 V2',
                'description' => 'MoYu MeiLong 6x6 V2 (Non-Magnetic) is a great choice if you are looking for a 6x6 and don\'t want to break the bank!',
                'price' => 10.56,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'YJ MGC 7x7 (Magnetic)',
                'description' => 'YJ MGC 7x7 Magnetic is certainly going to be one of the most popular 7x7\'s available in very little time! The MGC 7x7 does a great job of capturing YJ\'s signature turning feel and consistent magnet strength throughout all 7 layers which is a huge plus for us.',
                'price' => 28.51,
                'stock' => 100,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'YJ YuFu V2 M 7x7',
                'description' => 'The YJ YuFu V2 M 7x7 is a ground breaking release from YJ! The performance of this "budget" 7x7 is very impressive and is suitable for any speedcuber. Smooth turning and strong magnets make the YuFu V2 M a great choice!',
                'price' => 13.42,
                'stock' => 100,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'YuXin Little Magic 7x7',
                'description' => 'The YuXin Little Magic 7x7 is an amazing deal if you are looking to get started with 7x7 speedsolving. The Little Magic retains a similar feel than other puzzles in the popular Little Magic series.',
                'price' => 9.59,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'X-Man Spark 7x7 (Magnetic)',
                'description' => 'X-Man Spark 7x7 Magnetic has been highly anticipated since it made its way on the scene and was being used to smash world records. The Spark is easily one of the top 7x7\'s available currently and almost seems to push you to get better times by urging you to turn faster. The magnetic version features strong magnets to help you turn faster while staying in control.',
                'price' => 48.90,
                'stock' => 135,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoYu AoFu WR M 7x7 (Magnetic)',
                'description' => 'MoYu AoFu WR M 7x7 Magnetic is a modern update to the once legendary "AoFu" 7x7!',
                'price' => 40.74,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'DianSheng 7x7 (Magnetic)',
                'description' => 'DianSheng 7x7 Magnetic is a nice option for speedcubers who are looking for a more stable feel.',
                'price' => 17.90,
                'stock' => 999,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoYu MeiLong 7x7 V2 (Magnetic)',
                'description' => 'MoYu MeiLong 7x7 V2 (Magnetic) is a great choice if you are looking for a 7x7 and don\'t want to break the bank!',
                'price' => 15.34,
                'stock' => 473,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'QiYi QiXing S2 7x7',
                'description' => 'The QiYi QiXing S2 7x7 is a great choice for beginning 7x7 solvers! This speed cube features smooth turning and a bright color scheme to assist with the lookahead.',
                'price' => 8.63,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'QiYi QiXing 7x7',
                'description' => 'The QiYi QiXing 7x7 is an impressive item to say the least. The QiXing is the perfect option for beginning / advanced solvers or even someone who is just looking for a very cost-effective 7x7! Considering how low the price is, we did not expect the QiXing to perform as well as it does. Try it out and we are sure that you will also be surprised by what this item has to offer.',
                'price' => 12.20,
                'stock' => 10,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'JPerm MGC 7x7 (Magnetic)',
                'description' => 'Love JPerm? Now you can get a replica of his main speed cube, the YJ MGC 7x7 Magnetic, and support the JPerm YouTube Channel at the same time!',
                'price' => 44.03,
                'stock' => 30,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'YJ YuHu V2 Megaminx (Magnetic)',
                'description' => 'YJ YuHu V2 Megaminx Magnetic is the first megaminx in this price range to come equipped with magnets from the factory! The moderate-strength magnets add a nice weight to the puzzle which helps to improve the overall stability of the puzzle and promotes smoother, more accurate turning. A distinguishing feature of the YuHu V2 Magnetic is the circular ridge design. This design is surprisingly comfortable and easy to hold and grip.',
                'price' => 10.55,
                'stock' => 100,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'YuXin Little Magic V2 Megaminx',
                'description' => 'YuXin Little Magic V2 Megaminx is a nice update to the well-received V1. By tweaking the mechanism to make it slightly more rounded, the overall performance is improved. One of the trickiest parts is grip when it comes to solving a megaminx. The Little Magic V2 has an awesome ridged design that promotes a comfortable and solid grip during speedsolving!',
                'price' => 8.12,
                'stock' => 340,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'QiYi QiHeng S Megaminx Sculpted',
                'description' => 'The QiYi QiHeng S Megaminx is QiYi\'s first budget megaminx to feature a sculpted design. The sculpted ridges help you to grip the puzzle better to avoid locking up or losing control. Layer rotations are smooth and corner cutting is good.',
                'price' => 7.30,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'GAN Megaminx (Magnetic)',
                'description' => 'GAN Megaminx Magnetic is a light weight, factory magnetic megaminx which utilizes GAN\'s popular GES spring system. This item comes with four different GES spring options which are easily interchangeable and offer a different feel. Same as other GAN cubes, this item features exposed moderate strength magnets to improve performance and feel.',
                'price' => 47.27,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'YJ MGC Megaminx (Magnetic)',
                'description' => 'The YJ MGC Magnetic Megaminx is a fresh addition to the popular, budget friendly MGC lineup! What makes this megaminx special is that it has many features found in top tier models for a more competitive price. "Ridges" were added to assist with grip and comfort which compliment to overall feel nicely. Vibrant shades were chosen with look-ahead in mind and contrast nicely. Out of the box, you will find that corner cutting is just under a half turn and strong magnets help to keep you in control while speedsolving.',
                'price' => 18.72,
                'stock' => 78,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'DaYan Megaminx V2 (Magnetic)',
                'description' => 'DaYan Megaminx V2 (Magnetic) is the revival of the once-popular DaYan Megaminx. This version features 120 factory-installed magnets to assist with stability and control and the sculpted exterior helps improve grip which is incredibly important for megamix solvers. This lightweight design is already loved by many!',
                'price' => 26.88,
                'stock' => 47,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'X-Man Galaxy V2 Megaminx (Sculpted)',
                'description' => 'The X-Man Galaxy Megaminx V2 (Sculpted) is the updated version of the world-famous X-Man Galaxy Megaminx (Sculpted). The V2 offers performance enhancements and a new, smaller size that is great for speedsolving and grip! Many speedcubers have already been setting new records with the V2 so why not be one of them?!',
                'price' => 16.27,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'YuXin Little Magic Megaminx (V3, Magnetic)',
                'description' => 'YuXin Little Magic Megaminx (V3, Magnetic) is a lot of upgrade for a small price tag!',
                'price' => 11.38,
                'stock' => 211,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'GAN Megaminx V2 (Magnetic, MagLev, UV Coated)',
                'description' => 'GAN Megaminx V2 (Magnetic, MagLev, UV Coated) is a fantastic update and includes new features never seen in a megaminx!',
                'price' => 64.24,
                'stock' => 888,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'Z Carbon Fiber Megaminx',
                'description' => 'The Z Carbon Fiber Megaminx moves surprisingly well for such a good price. The durable carbon fiber stickers add a very unique and amazing appearance to this puzzle that make it a must have for any collector / enthusiast.',
                'price' => 8.93,
                'stock' => 66,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'QiYi MS Pyraminx (Magnetic)',
                'description' => 'QiYi MS Pyraminx Magnetic is a part of the new budget "MS" series! The MS series really took us by surprise as the amount of performance that you are getting for the price is an INSANE value. The turning of this pyraminx is very smooth and the strong magnets do a great job of preventing lock-ups and overturning.',
                'price' => 6.49,
                'stock' => 120,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'GAN Pyraminx (Magnetic)',
                'description' => 'GAN Pyraminx (Magnetic) is a ground-breaking release from GAN! GAN\'s of the pyraminx features an all-new core-edge magnetic positioning system which greatly improves the feel and performance',
                'price' => 15.46,
                'stock' => 220,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'GAN Pyraminx Enhanced (Magnetic)',
                'description' => 'GAN Pyraminx Enhanced (Magnetic) is a ground-breaking release from GAN! GAN\'s of the pyraminx features an all-new core-edge magnetic positioning system which greatly improves the feel and performance!',
                'price' => 23.61,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'YuXin Little Magic Pyraminx',
                'description' => 'It\'s here! After a lot of anticipation, the YuXin Little Magic Pyraminx has arrived. The Little Magic series features introductory-level puzzles that offer amazing performance that rivals some higher-end competitors!',
                'price' => 5.67,
                'stock' => 766,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoFang JiaoShi MeiLong Pyraminx',
                'description' => 'The MoFang JiaoShi MeiLong Pyraminx is the first pyraminx in Cubing Classroom\'s new entry level lineup! Featuring a frosted surface, vibrant colors, and controllable turning this is a great option if you are looking to get started with Pyraminx!',
                'price' => 4.04,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'MoFang JiaoShi MeiLong Pyraminx (Magnetic)',
                'description' => 'MoFang JiaoShi MeiLong Pyraminx Magnetic is a nice entry-level option for new pyraminx solvers and includes strong magnets pre-installed. This puzzle features MoYu\'s new frosted plastic that is a semi-gloss finish.',
                'price' => 6.49,
                'stock' => 50,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'X-Man Bell V2 Pyraminx (Magnetic)',
                'description' => 'X-Man Bell V2 Pyraminx Magnetic is an innovative update of one of the most popular pyraminx! The Bell V2 is the first pyraminx to offer an adjustable magnet system that is easily adjusted and will actually move the magnet closer or farther from the core to make the magnets stronger or weaker.',
                'price' => 13.83,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'YuXin Black Kirin Pyraminx',
                'description' => 'If you are on a budget, the YuXin Black Kirin Pyraminx is something to consider! As a refresh to YuXin\'s budget line, the Black Kirin shares some similar features to the popular Little Magic series. A key feature is the frosted stickerless plastic and the smooth, sandy turns.',
                'price' => 4.86,
                'stock' => 486,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'Z Carbon Fiber Pyraminx',
                'description' => 'The Z Carbon Fiber Pyraminx moves surprisingly well for such a good price. The durable carbon fiber stickers add a very unique and amazing appearance to this puzzle that make it a must have for any collector or enthusiast.',
                'price' => 6.49,
                'stock' => 649,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoYu RS3 Pyraminx (Magnetic)',
                'description' => 'MoYu RS3 Pyraminx (Magnetic) is an exciting continuation of the most popular budget series, "RS", by MoYu.',
                'price' => 8.12,
                'stock' => 812,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'YuXin Little Magic Skewb',
                'description' => 'The YuXin Little Magic Skewb fits in perfectly with the rest of the popular Little Magic series puzzles. The turning of this skewb was surprisingly fast and the ball bearing mechanism helps to align each turn for a more pleasant solving experience.',
                'price' => 4.86,
                'stock' => 30,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoYu RS Skewb (Magnetic, MagLev)',
                'description' => 'MoYu RS Skewb (Magnetic, MagLev) is an exciting continuation of the most popular budget series, "RS", by MoYu.',
                'price' => 12.20,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'MoFang JiaoShi MeiLong Skewb',
                'description' => 'The MoFang JiaoShi MeiLong Skewb is a slight update to the original MFJ Skewb. This variation features the same smooth, light, turning feel all for an amazing price-point.',
                'price' => 6.49,
                'stock' => 33,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'GAN Skewb (Magnetic)',
                'description' => 'GAN Skewb (Magnetic) is a massive advancement in Skewb mechanism! This Skewb features a lot of GAN\'s innovative features that put them on the map such as their GES tensioning system and the new Core/Corner Magnet system that was recently introduced!',
                'price' => 17.90,
                'stock' => 322,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'GAN Skewb Enhanced (Magnetic)',
                'description' => 'GAN Skewb Enhanced (Magnetic) is a massive advancement in Skewb mechanism! This Skewb features a lot of GAN\'s innovative features that put them on the map such as their GES tensioning system and the new Core/Corner Magnet system that was recently introduced!',
                'price' => 26.06,
                'stock' => 154,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'MoYu WeiLong Skewb (Magnetic, MagLev)',
                'description' => 'MoYu WeiLong Skewb (Magnetic, MagLev) includes popular features found in modern speed cubes which separate this skewb from the rest!',
                'price' => 16.27,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'MoYu RS Skewb (Magnetic)',
                'description' => 'MoYu RS Skewb (Magnetic) is an exciting continuation of the most popular budget series, "RS", by MoYu.',
                'price' => 8.12,
                'stock' => 100,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'Z Carbon Fiber Skewb',
                'description' => 'The Z Carbon Fiber Skewb moves surprisingly well for such a good price. The durable carbon fiber stickers add a very unique and amazing appearance to this puzzle that makes it a must have for any collector / enthusiast.',
                'price' => 6.49,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
            [
                'name' => 'X-Man Wingy Skewb (V2, Magnetic)',
                'description' => 'X-Man Wingy Skewb (V2, Magnetic) is packed full of customization options that you do not see in other skewbs!',
                'price' => 16.30,
                'stock' => 500,
                'status' => StatusEnum::disponible,
                'wca' => true,
            ],
            [
                'name' => 'DianSheng Big Skewb - 9cm (Magnetic)',
                'description' => 'DianSheng Big Skewb - 9cm (Magnetic) is part of DianSheng\'s series of high-performing, oversized cubes and puzzles! Don\'t be fooled by the larger size, this skewb turns very well and is equipped with factory-installed magnets plus a spring compression system!',
                'price' => 18.72,
                'stock' => 0,
                'status' => StatusEnum::rupture,
                'wca' => true,
            ],
        ];



        for ($i = 0; $i < 80; $i++) {
            $product = new Product();
            $product->setName($products[$i]['name']);
            $product->setDescription($products[$i]['description']);
            $product->setPrice($products[$i]['price']);
            $product->setStock($products[$i]['stock']);
            $product->setImage($this->getReference(self::IMAGE_REFERENCE . '_' . ($i + 10)));
            $categ = intdiv(($i + 10), 10) + 1;
            $product->setCategory($this->getReference(self::CATEGORY_REFERENCE . '_' . $categ));
            $product->setStatus($products[$i]['status']);
            $product->setWca($products[$i]['wca']);
            $manager->persist($product);
            $this->addReference(self::PRODUCT_REFERENCE . '_' . $i + 10, $product);
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
