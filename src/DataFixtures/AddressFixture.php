<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Address;

class AddressFixture extends Fixture
{

    private const ADDRESS_REFERENCE = 'address';

    public function load(ObjectManager $manager)
    {
        $address1 = new Address();
        $address1->setNo(1);
        $address1->setStreet('Allée du Front St. Vincent');
        $address1->setPostalcode(57000);
        $address1->setCity('Metz');
        $address1->setCountry('France');
        $manager->persist($address1);
        $this->addReference(self::ADDRESS_REFERENCE . '_1', $address1);

        $address2 = new Address();
        $address2->setNo(55);
        $address2->setStreet('Rue du Faubourg Saint-Honoré');
        $address2->setPostalcode(75008);
        $address2->setCity('Paris');
        $address2->setCountry('France');
        $manager->persist($address2);
        $this->addReference(self::ADDRESS_REFERENCE . '_2', $address2);

        $address3 = new Address();
        $address3->setNo(241);
        $address3->setStreet('Tour de l\'Europe');
        $address3->setPostalcode(68100);
        $address3->setCity('Mulhouse');
        $address3->setCountry('France');
        $manager->persist($address3);
        $this->addReference(self::ADDRESS_REFERENCE . '_3', $address3);

        $address4 = new Address();
        $address4->setNo(1600);
        $address4->setStreet('Pennsylvania Ave NW');
        $address4->setPostalcode(20500);
        $address4->setCity('Washington D.C.');
        $address4->setCountry('USA');
        $manager->persist($address4);
        $this->addReference(self::ADDRESS_REFERENCE . '_4', $address4);

        $address5 = new Address();
        $address5->setNo(1);
        $address5->setStreet('Rue ou Jérémie habite');
        $address5->setPostalcode(57000);
        $address5->setCity('Metz');
        $address5->setCountry('France');
        $manager->persist($address5);
        $this->addReference(self::ADDRESS_REFERENCE . '_5', $address5);

        $address6 = new Address();
        $address6->setNo(4);
        $address6->setStreet('rue de la rue');
        $address6->setPostalcode(10000);
        $address6->setCity('Villebourg');
        $address6->setCountry('France');
        $manager->persist($address6);
        $this->addReference(self::ADDRESS_REFERENCE . '_6', $address6);

        $address7 = new Address();
        $address7->setNo(5);
        $address7->setStreet('en Fournirue');
        $address7->setPostalcode(57000);
        $address7->setCity('Metz');
        $address7->setCountry('France');
        $manager->persist($address7);
        $this->addReference(self::ADDRESS_REFERENCE . '_7', $address7);

        $address8 = new Address();
        $address8->setNo(18);
        $address8->setStreet('en Nexirue');
        $address8->setPostalcode(57000);
        $address8->setCity('Metz');
        $address8->setCountry('France');
        $manager->persist($address8);
        $this->addReference(self::ADDRESS_REFERENCE . '_8', $address8);

        $address9 = new Address();
        $address9->setNo(23);
        $address9->setStreet('rue Belle-Isle');
        $address9->setPostalcode(57000);
        $address9->setCity('Metz');
        $address9->setCountry('France');
        $manager->persist($address9);
        $this->addReference(self::ADDRESS_REFERENCE . '_9', $address9);

        $address10 = new Address();
        $address10->setNo(16);
        $address10->setStreet('Place de le République');
        $address10->setPostalcode(57000);
        $address10->setCity('Metz');
        $address10->setCountry('France');
        $manager->persist($address10);
        $this->addReference(self::ADDRESS_REFERENCE . '_10', $address10);

        $manager->flush();
    }
}
