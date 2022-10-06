<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Winegrower;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class WinegrowerFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $repouser = $manager->getRepository(User::class);

        $winegrower = new Winegrower();
        $winegrower->setFirstname('Pierre');
        $winegrower->setLastname('Kiroule');
        $winegrower->setUser($repouser->findOneBy(['email'=>'pierre@exemple.com']));
        $manager->persist($winegrower);

        $winegrower = new Winegrower();
        $winegrower->setFirstname('Theo');
        $winegrower->setLastname('Cupet');
        $winegrower->setUser($repouser->findOneBy(['email'=>'theo@exemple.com']));
        $manager->persist($winegrower);

        $winegrower = new Winegrower();
        $winegrower->setFirstname('Yvan');
        $winegrower->setLastname('Tile');
        $winegrower->setUser($repouser->findOneBy(['email'=>'yvan@exemple.com']));
        $manager->persist($winegrower);


        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }
}
