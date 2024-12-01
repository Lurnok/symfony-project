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
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_1"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_1"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_1")->getPrice());
        $orderItem->setQuantity(5);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_1", $orderItem);

        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_1"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_2"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_2")->getPrice());
        $orderItem->setQuantity(2);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_2", $orderItem);

        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_1"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_3"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_3")->getPrice());
        $orderItem->setQuantity(1);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_3", $orderItem);


        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_2"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_61"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_61")->getPrice());
        $orderItem->setQuantity(1);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_4", $orderItem);

        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_2"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_22"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_22")->getPrice());
        $orderItem->setQuantity(2);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_5", $orderItem);

        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_2"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_13"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_13")->getPrice());
        $orderItem->setQuantity(7);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_6", $orderItem);



        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_3"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_31"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_31")->getPrice());
        $orderItem->setQuantity(1);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_7", $orderItem);

        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_3"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_2"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_2")->getPrice());
        $orderItem->setQuantity(18);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_8", $orderItem);

        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_3"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_67"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_67")->getPrice());
        $orderItem->setQuantity(3);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_9", $orderItem);


        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_4"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_18"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_18")->getPrice());
        $orderItem->setQuantity(5);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_10", $orderItem);

        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_4"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_32"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_32")->getPrice());
        $orderItem->setQuantity(1);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_11", $orderItem);

        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_4"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_25"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_25")->getPrice());
        $orderItem->setQuantity(1);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_12", $orderItem);


        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_5"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_18"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_18")->getPrice());
        $orderItem->setQuantity(50);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_13", $orderItem);

        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_5"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_42"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_42")->getPrice());
        $orderItem->setQuantity(1);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_14", $orderItem);

        $orderItem = new OrderItem();
        $orderItem->setInOrder($this->getReference(self::ORDER_REFERENCE . "_5"));
        $orderItem->setProduct($this->getReference(self::PRODUCT_REFERENCE . "_30"));
        $orderItem->setProductPrice($this->getReference(self::PRODUCT_REFERENCE . "_30")->getPrice());
        $orderItem->setQuantity(100);
        $manager->persist($orderItem);
        $this->addReference(self::ORDERITEM_REFERENCE . "_15", $orderItem);

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
