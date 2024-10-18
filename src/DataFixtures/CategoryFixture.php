<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixture extends Fixture
{

    private const CATEGORY_REFERENCE = 'category';

    public function load(ObjectManager $manager): void
    {

        $category1 = new Category();
        $category1->setDescription('2x2');
        $manager->persist($category1);
        $this->addReference(self::CATEGORY_REFERENCE . '_1', $category1);

        $category2 = new Category();
        $category2->setDescription('3x3');
        $manager->persist($category2);
        $this->addReference(self::CATEGORY_REFERENCE . '_2', $category2);

        $category3 = new Category();
        $category3->setDescription('4x4');
        $manager->persist($category3);
        $this->addReference(self::CATEGORY_REFERENCE . '_3', $category3);

        $category4 = new Category();
        $category4->setDescription('5x5');
        $manager->persist($category4);
        $this->addReference(self::CATEGORY_REFERENCE . '_4', $category4);

        $category5 = new Category();
        $category5->setDescription('6x6');
        $manager->persist($category5);
        $this->addReference(self::CATEGORY_REFERENCE . '_5', $category5);

        $category6 = new Category();
        $category6->setDescription('7x7');
        $manager->persist($category6);
        $this->addReference(self::CATEGORY_REFERENCE . '_6', $category6);
        
        $category8 = new Category();
        $category8->setDescription('Megaminx');
        $manager->persist($category8);
        $this->addReference(self::CATEGORY_REFERENCE . '_7', $category8);

        $category9 = new Category();
        $category9->setDescription('Pyraminx');
        $manager->persist($category9);
        $this->addReference(self::CATEGORY_REFERENCE . '_8', $category9);

        $category10 = new Category();
        $category10->setDescription('Skewb');
        $manager->persist($category10);
        $this->addReference(self::CATEGORY_REFERENCE . '_9', $category10);

        $category11 = new Category();
        $category11->setDescription('Square-1');
        $manager->persist($category11);
        $this->addReference(self::CATEGORY_REFERENCE . '_10', $category11);

        $category12 = new Category();
        $category12->setDescription('Grands cubes');
        $manager->persist($category12);
        $this->addReference(self::CATEGORY_REFERENCE . '_11', $category12);

        $category13 = new Category();
        $category13->setDescription('Cuboides');
        $manager->persist($category13);
        $this->addReference(self::CATEGORY_REFERENCE . '_12', $category13);

        $category14 = new Category();
        $category14->setDescription('Shape mods');
        $manager->persist($category14);
        $this->addReference(self::CATEGORY_REFERENCE . '_13', $category14);

        $manager->flush();
    }
}
