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
        $this->addReference(self::IMAGE_REFERENCE . "_1", $image);

        $image = new Image();
        $image->setUrl("/images/2x2/QIYI-MS.jpg");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_2", $image);

        $image = new Image();
        $image->setUrl("/images/2x2/YuXin-Little-Magic.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_3", $image);

        $image = new Image();
        $image->setUrl("/images/2x2/MoFang-JiaoShi.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_4", $image);

        $image = new Image();
        $image->setUrl("/images/2x2/DaYan-TengYun.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_5", $image);

        $image = new Image();
        $image->setUrl("/images/2x2/MoYu-RS2M.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_6", $image);

        $image = new Image();
        $image->setUrl("/images/2x2/GAN-251.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_7", $image);

        $image = new Image();
        $image->setUrl("/images/2x2/DianSheng.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_8", $image);

        $image = new Image();
        $image->setUrl("/images/2x2/JPerm-MGC.png");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_9", $image);




        // ----------------------- 3X3 ---------------------------



        $image = new Image();
        $image->setUrl("/images/3x3/MoYu-RS3-M.jpg");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_10", $image);

        $image = new Image();
        $image->setUrl("/images/3x3/JPerm-RS3-M.jpg");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_11", $image);

        $image = new Image();
        $image->setUrl("/images/3x3/GAN-11-Pro.jpg");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_12", $image);

        $image = new Image();
        $image->setUrl("/images/3x3/YuXin-Little-Magic.jpg");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_13", $image);

        $image = new Image();
        $image->setUrl("/images/3x3/MoYu-RS3-M-2021.jpg");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_14", $image);

        $image = new Image();
        $image->setUrl("/images/3x3/GAN-356.jpg");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_15", $image);

        $image = new Image();
        $image->setUrl("/images/3x3/MoYu-WeiLong.jpg");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_16", $image);

        $image = new Image();
        $image->setUrl("/images/3x3/QiYi-Thunderclap-V3.jpg");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_17", $image);

        $image = new Image();
        $image->setUrl("/images/3x3/YJ-MGC-Elite-V2.jpg");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_18", $image);

        $image = new Image();
        $image->setUrl("/images/3x3/MoFang-JiaoShi-MeiLong.jpg");
        $manager->persist($image);
        $this->addReference(self::IMAGE_REFERENCE . "_19", $image);



        // ----------------------- 4X4 --------------------------------------

        $urls = [
            "4x4/YJ-MGC.jpg",
            "4x4/MoYu-MeiLong.jpg",
            "4x4/QiYi-MS.jpg",
            "4x4/YJ-ZhiSu-Mini.jpg",
            "4x4/MoFang-JiaoShi.jpg",
            "4x4/MoYu-AoSu.jpg",
            "4x4/MoYu-RS4-M.jpg",
            "4x4/GAN-460.jpg",
            "4x4/X-Man-Ambition.jpg",
            "4x4/DianSheng.jpg",
            "5x5/YJ-MGC.jpg",
            "5x5/MoYu-MeiLong.jpg",
            "5x5/QiYi-MS.jpg",
            "5x5/MoFang-JiaoShi.jpg",
            "5x5/YJ-ZhiChuang.jpg",
            "5x5/MoYu-AoChuang.jpg",
            "5x5/DianSheng.jpg",
            "5x5/JPerm-MGC.jpg",
            "5x5/GAN-562.jpg",
            "5x5/QiYi-MP.jpg",
            "6x6/YJ-MGC.jpg",
            "6x6/YJ-YuShi.jpg",
            "6x6/YuXin-Little-Magic.jpg",
            "6x6/MoYu-AoShi.jpg",
            "6x6/QiYi-QiFan.jpg",
            "6x6/DianSheng.jpg",
            "6x6/MoYu-MeiLong.jpg",
            "6x6/X-Man-Shadow.jpg",
            "6x6/JPerm-MGC.jpg",
            "6x6/MoYu-MeiLong-6x6-V2.jpg",
            "7x7/YJ-MGC.jpg",
            "7x7/YJ-YuFu.jpg",
            "7x7/YuXin-Little-Magic.jpg",
            "7x7/X-Man-Spark.jpg",
            "7x7/MoYu-AoFu.jpg",
            "7x7/DianSheng.jpg",
            "7x7/MoYu-MeiLong-7x7-V2.jpg",
            "7x7/QiYi-QiXing-S2.jpg",
            "7x7/QiYi-QiXing.jpg",
            "7x7/JPerm-MGC.jpg",
            "megaminx/YJ-YuHu-V2.jpg",
            "megaminx/YuXin-Little-Magic-V2.jpg",
            "megaminx/QiYi-QiHeng-S.jpg",
            "megaminx/GAN-Megaminx.jpg",
            "megaminx/YJ-MGC.jpg",
            "megaminx/DaYan-Megaminx-V2.jpg",
            "megaminx/X-Man-Galaxy-V2.jpg",
            "megaminx/YuXin-Little-Magic-Megaminx-V3.jpg",
            "megaminx/GAN-Megaminx-V2.jpg",
            "megaminx/Z-Carbon-Fiber-Megaminx.jpg",
            "pyraminx/QiYi-MS-Pyraminx.jpg",
            "pyraminx/GAN-Pyraminx.jpg",
            "pyraminx/GAN-Pyraminx-Enhanced.jpg",
            "pyraminx/YuXin-Little-Magic.jpg",
            "pyraminx/MoFang-JiaoShi.jpg",
            "pyraminx/MoFang-JiaoShi-MeiLong.jpg",
            "pyraminx/X-Man-Bell-V2.jpg",
            "pyraminx/YuXin-Black-Kirin.jpg",
            "pyraminx/Z-Carbon-Fiber-Pyraminx.jpg",
            "pyraminx/MoYu-RS3.jpg",
            "skewb/YuXin-Little-Magic.jpg",
            "skewb/MoYu-RS.jpg",
            "skewb/MoFang-JiaoShi.jpg",
            "skewb/GAN-Skewb.jpg",
            "skewb/GAN-Skewb-Enhanced.jpg",
            "skewb/MoYu-WeiLong-Skewb.jpg",
            "skewb/MoYu-RS-2.jpg",
            "skewb/Z-Carbon-Fiber-Skewb.jpg",
            "skewb/X-Man-Wingy.jpg",
            "skewb/DianSheng.jpg",

        ];

        for ($i = 0; $i < 70; $i++) {
            $image = new Image();
            $image->setUrl("/images/" . $urls[$i]);
            $manager->persist($image);
            $this->addReference(self::IMAGE_REFERENCE . "_" . $i + 20, $image);
        }

        $manager->flush();
    }
}
