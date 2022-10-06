<?php

namespace App\DataFixtures;

use App\DataFixtures\ProductsFixtures;
use App\DataFixtures\UserFixtures;
use App\Entity\Locations;
use App\Entity\Products;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class LocationsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $tenant = $manager->getRepository(User::class);
        $product = $manager->getRepository(Products::class);

        $location1 = new Locations();
        $location1->setStartDate(new \DateTimeImmutable("10-10-2022T10:00:00 "));
        $location1->setEndDate(new \DateTimeImmutable("12-10-2022T20:00:00"));
        $location1->setTenant($tenant->findOneBy(['email' => 'pierre@exemple.com']));
        $location1->setProduct($product->findOneBy(['name' => 'Tracteur enjambeur Polyvalen']));
        $manager->persist($location1);

        $location2 = new Locations();
        $location2->setStartDate(new \DateTimeImmutable("11-10-2022T08:30:00"));
        $location2->setEndDate(new \DateTimeImmutable("20-10-2022T08:00:00"));
        $location2->setTenant($tenant->findOneBy(['email' => 'theo@exemple.com']));
        $location2->setProduct($product->findOneBy(['name' => 'Prétailleuses disco et visio multiviti']));
        $manager->persist($location2);

        $location3 = new Locations();
        $location3->setStartDate(new \DateTimeImmutable("15-10-2022T14:00:00"));
        $location3->setEndDate(new \DateTimeImmutable("20-10-2022T12:00:00"));
        $location3->setTenant($tenant->findOneBy(['email' => 'yvan@exemple.com']));
        $location3->setProduct($product->findOneBy(['name' => 'Tireuse Boucheuse ']));
        $manager->persist($location3);

        $location4 = new Locations();
        $location4->setStartDate(new \DateTimeImmutable("20-10-2022T10:00:00"));
        $location4->setEndDate(new \DateTimeImmutable("10-11-2022T12:00:00"));
        $location4->setTenant($tenant->findOneBy(['email' => 'pierre@exemple.com']));
        $location4->setProduct($product->findOneBy(['name' => 'Laveuse de bouteille']));
        $manager->persist($location4);
       
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ProductsFixtures::class,
            UserFixtures::class,
        ];
    }
}
