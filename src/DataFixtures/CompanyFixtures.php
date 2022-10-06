<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Company;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CompanyFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $repouser = $manager->getRepository(User::class);

        $company = new Company();
        $company->setName('Viti&Co');
        $company->setSiret('13647957800012');
        $company->setUser($repouser->findOneBy(['email'=>'vitico@exemple.com']));
        $manager->persist($company);

        $company = new Company();
        $company->setName('AgroTech');
        $company->setSiret('57397167500098');
        $company->setUser($repouser->findOneBy(['email'=>'agrotech@exemple.com']));
        $manager->persist($company);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }
}
