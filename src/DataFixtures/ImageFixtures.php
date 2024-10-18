<?php

namespace App\DataFixtures;

use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImageFixtures extends Fixture
{
    private const IMAGE_REFERENCE = 'image';

    public function load(ObjectManager $manager): void
    {
        $image = new Image();
        $image->setUrl("/images/gan11mpro.jpg");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_1",$image);

        for ($i = 2; $i <= 120; $i++){
            $image = new Image();
            $image->setUrl("/images/". $i .".jpg"); 
            $manager->persist($image);
            $this->addReference(self::IMAGE_REFERENCE . "_" . $i,$image);
        }
        
        $manager->flush();
    }
}
