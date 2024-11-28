<?php

namespace App\DataFixtures;

use App\Entity\OrderItem;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class OrderItemFixtures extends Fixture implements DependentFixtureInterface
{
    private const ORDER_REFERENCE = 'order';
    private const PRODUCT_REFERENCE = 'product';

    private const ORDERITEM_REFERENCE = 'orderitem';


    public function load(ObjectManager $manager): void
    {

        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE."_1"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE."_1"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE."_1")->getPrice());
        $orderItem->setQuantity(5);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE."_1",$orderItem);

        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE."_1"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE."_2"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE."_2")->getPrice());
        $orderItem->setQuantity(2);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE."_2",$orderItem);

        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE."_1"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE."_3"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE."_3")->getPrice());
        $orderItem->setQuantity(1);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE."_3",$orderItem);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            OrderFixtures::class,
            ProductFixture::class
        ];
    }
}
