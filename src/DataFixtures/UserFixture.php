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
        $user1->setPassword("adminpass");
        $manager->persist($user1);
        $this->addReference(self::USER_REFERENCE . '_1', $user1);

        $user2 = new User();
        $user2->setAdress($this->getReference(self::ADDRESS_REFERENCE . '_2'));
        $user2->setEmail("thomas.ducret@hotmail.fr");
        $user2->setAdmin(false);
        $user2->setFirstName("Thomas");
        $user2->setLastName("Ducret");
        $user2->setPassword("GDgroMuscl");
        $manager->persist($user2);
        $this->addReference(self::USER_REFERENCE . '_2', $user2);

        $user3 = new User();
        $user3->setAdress($this->getReference(self::ADDRESS_REFERENCE . '_2'));
        $user3->setEmail("emmanuel.macron@president.gouv");
        $user3->setAdmin(false);
        $user3->setFirstName("Emmanuel");
        $user3->setLastName("Macron");
        $user3->setPassword("lovebrigitte");
        $manager->persist($user3);
        $this->addReference(self::USER_REFERENCE . '_3', $user3);

        $user4 = new User();
        $user4->setAdress($this->getReference(self::ADDRESS_REFERENCE . '_3'));
        $user4->setEmail("pierre.blanchet@gmail.com");
        $user4->setAdmin(false);
        $user4->setFirstName("Pierre");
        $user4->setLastName("Blanchet");
        $user4->setPassword("password4");
        $manager->persist($user4);
        $this->addReference(self::USER_REFERENCE . '_4', $user4);

        $user5 = new User();
        $user5->setAdress($this->getReference(self::ADDRESS_REFERENCE . '_4'));
        $user5->setEmail("joe.biden@potus.us");
        $user5->setAdmin(false);
        $user5->setFirstName("Joe");
        $user5->setLastName("Biden");
        $user5->setPassword("icecream");
        $manager->persist($user5);
        $this->addReference(self::USER_REFERENCE . '_5', $user5);

        $user6 = new User();
        $user6->setAdress($this->getReference(self::ADDRESS_REFERENCE . '_5'));
        $user6->setEmail("grem.grem@gremmail.grem");
        $user6->setAdmin(false);
        $user6->setFirstName("Grem");
        $user6->setLastName("Gremmagel");
        $user6->setPassword("grem");
        $manager->persist($user6);
        $this->addReference(self::USER_REFERENCE . '_6', $user6);

        $user7 = new User();
        $user7->setAdress($this->getReference(self::ADDRESS_REFERENCE . '_6'));
        $user7->setEmail("personne.humain@homosapiens.com");
        $user7->setAdmin(false);
        $user7->setFirstName("Personne");
        $user7->setLastName("Humain");
        $user7->setPassword("jesuisunhumain");
        $manager->persist($user7);
        $this->addReference(self::USER_REFERENCE . '_7', $user7);

        $user8 = new User();
        $user8->setAdress($this->getReference(self::ADDRESS_REFERENCE . '_7'));
        $user8->setEmail("gabin.dupont@gmail.com");
        $user8->setAdmin(false);
        $user8->setFirstName("Gabin");
        $user8->setLastName("Dupont");
        $user8->setPassword("cubeurfou");
        $manager->persist($user8);
        $this->addReference(self::USER_REFERENCE . '_8', $user8);

        $user9 = new User();
        $user9->setAdress($this->getReference(self::ADDRESS_REFERENCE . '_8'));
        $user9->setEmail("margaux.marchand@gmail.com");
        $user9->setAdmin(false);
        $user9->setFirstName("Margaux");
        $user9->setLastName("Marchand");
        $user9->setPassword("azerty1234");
        $manager->persist($user9);
        $this->addReference(self::USER_REFERENCE . '_9', $user9);

        $user10 = new User();
        $user10->setAdress($this->getReference(self::ADDRESS_REFERENCE . '_9'));
        $user10->setEmail("osama.triki@gmail.com");
        $user10->setAdmin(false);
        $user10->setFirstName("Osama");
        $user10->setLastName("Triki");
        $user10->setPassword("enfantcave");
        $manager->persist($user10);
        $this->addReference(self::USER_REFERENCE . '_10', $user10);

        $user11 = new User();
        $user11->setAdress($this->getReference(self::ADDRESS_REFERENCE . '_10'));
        $user11->setEmail("julien.maaroufi@gmail.com");
        $user11->setAdmin(false);
        $user11->setFirstName("Julien");
        $user11->setLastName("Maaroufi");
        $user11->setPassword("julientrobg");
        $manager->persist($user11);
        $this->addReference(self::USER_REFERENCE . '_11', $user11);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            AddressFixture::class,
        ];
    }
}
