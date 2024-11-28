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
        $image->setUrl("/images/2x2/YJ-MGC.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_1",$image);

        $image = new Image();
        $image->setUrl("/images/2x2/QIYI-MS.jpg");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_2",$image);

        $image = new Image();
        $image->setUrl("/images/2x2/YuXin-Little-Magic.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_3",$image);

        $image = new Image();
        $image->setUrl("/images/2x2/MoFang-JiaoShi.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_4",$image);

        $image = new Image();
        $image->setUrl("/images/2x2/DaYan-TengYun.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_5",$image);

        $image = new Image();
        $image->setUrl("/images/2x2/MoYu-RS2M.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_6",$image);

        $image = new Image();
        $image->setUrl("/images/2x2/GAN-251.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_7",$image);

        $image = new Image();
        $image->setUrl("/images/2x2/DianSheng.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_8",$image);

        $image = new Image();
        $image->setUrl("/images/2x2/JPerm-MGC.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_9",$image);

        for ($i = 10; $i <= 120; $i++){
            $image = new Image();
            $image->setUrl("/images/". $i .".jpg"); 
            $manager->persist($image);
            $this->addReference(self::IMAGE_REFERENCE . "_" . $i,$image);
        }

        $image = new Image();
        $image->setUrl("/images/proutcube.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_121",$image);
        
        $manager->flush();
    }
}
