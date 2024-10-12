<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UserFixture extends Fixture implements DependentFixtureInterface
{

    private const ADDRESS_REFERENCE = 'address';
    private const USER_REFERENCE = 'user';

    public function load(ObjectManager $manager): void
    {
        $user1 = new User();
        $user1->setAdress($this->getReference(self::ADDRESS_REFERENCE . '_1'));
        $user1->setEmail("lucas.jordan@cubermarket.fr");
        $user1->setAdmin(true);
        $user1->setFirstName("Lucas");
        $user1->setLastName("JORDAN");
        $user1->setPassword();
        $manager->persist($user1);
        $this->addReference(self::USER_REFERENCE . '_1', $user1);

        $user2 = new User();
        $user2->setAdress($this->getReference(self::ADDRESS_REFERENCE . '_2'));
        $user2->setEmail("");
        $user2->setAdmin();
        $user2->setFirstName("");
        $user2->setLastName("");
        $user2->setPassword("");
        $manager->persist($user2);
        $this->addReference(self::USER_REFERENCE . '_2', $user1);


        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            AddressFixture::class,
        ];
    }
}
