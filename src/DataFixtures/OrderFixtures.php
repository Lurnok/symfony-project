<?php

namespace App\DataFixtures;

use App\Entity\Order;
use App\Enum\OrderStatusEnum;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class OrderFixtures extends Fixture implements DependentFixtureInterface
{
    private const USER_REFERENCE = 'user';
    private const ORDER_REFERENCE = 'order';

    public function load(ObjectManager $manager): void
    {
        $order = new Order();
        $order->setUser($this->getReference(self::USER_REFERENCE.'_5'));
        $order->setReference('ORD-'.strtoupper(uniqid()));
        $order->setStatus(OrderStatusEnum::expedie);
        $date = new DateTimeImmutable();
        $order->setCreatedAt($date);

        $manager->persist($order);
        $this->addReference(self::ORDER_REFERENCE . '_1', $order);


        $order = new Order();
        $order->setUser($this->getReference(self::USER_REFERENCE.'_3'));
        $order->setReference('ORD-'.strtoupper(uniqid()));
        $order->setStatus(OrderStatusEnum::expedie);
        $date = new DateTimeImmutable();
        $order->setCreatedAt($date);

        $manager->persist($order);
        $this->addReference(self::ORDER_REFERENCE . '_2', $order);


        $order = new Order();
        $order->setUser($this->getReference(self::USER_REFERENCE.'_7'));
        $order->setReference('ORD-'.strtoupper(uniqid()));
        $order->setStatus(OrderStatusEnum::expedie);
        $date = new DateTimeImmutable();
        $order->setCreatedAt($date);

        $manager->persist($order);
        $this->addReference(self::ORDER_REFERENCE . '_3', $order);


        $order = new Order();
        $order->setUser($this->getReference(self::USER_REFERENCE.'_5'));
        $order->setReference('ORD-'.strtoupper(uniqid()));
        $order->setStatus(OrderStatusEnum::expedie);
        $date = new DateTimeImmutable();
        $order->setCreatedAt($date);

        $manager->persist($order);
        $this->addReference(self::ORDER_REFERENCE . '_4', $order);


        $order = new Order();
        $order->setUser($this->getReference(self::USER_REFERENCE.'_2'));
        $order->setReference('ORD-'.strtoupper(uniqid()));
        $order->setStatus(OrderStatusEnum::expedie);
        $date = new DateTimeImmutable();
        $order->setCreatedAt($date);

        $manager->persist($order);
        $this->addReference(self::ORDER_REFERENCE . '_5', $order);



        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixture::class,
        ];
    }
}
