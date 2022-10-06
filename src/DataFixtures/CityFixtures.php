<?php

namespace App\DataFixtures;

use App\Entity\City;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CityFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $city = new City();
        $city->setName('Bordeaux');
        $city->setCode('33000');
        $manager->persist($city);
        
        $city = new City();
        $city->setName('Paris');
        $city->setCode('75000');
        $manager->persist($city);
        
        $city = new City();
        $city->setName('Lyon');
        $city->setCode('69000');
        $manager->persist($city);
        
        $city = new City();
        $city->setName('Nantes');
        $city->setCode('44000');
        $manager->persist($city);
        
        $city = new City();
        $city->setName('Bayonne');
        $city->setCode('64100');
        $manager->persist($city);
        
        $city = new City();
        $city->setName('Marseille');
        $city->setCode('13000');
        $manager->persist($city);
        
        $manager->flush();
    }
}
