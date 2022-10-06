<?php

namespace App\DataFixtures;

use App\Entity\Fields;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class FieldsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $repoowner = $manager->getRepository(User::class);

        $field = new Fields();
        $field->setLatitude('43.511441');
        $field->setLongitude('-1.461687');
        $field->setOwner($repoowner->findOneBy(['email'=>'pierre@exemple.com']));
        $manager->persist($field);

        $field = new Fields();
        $field->setLatitude('43.512709');
        $field->setLongitude('-1.464487');
        $field->setOwner($repoowner->findOneBy(['email'=>'pierre@exemple.com']));
        $manager->persist($field);

        $field = new Fields();
        $field->setLatitude('44.810213');
        $field->setLongitude('-0.603203');
        $field->setOwner($repoowner->findOneBy(['email'=>'yvan@exemple.com']));
        $manager->persist($field);

        $field = new Fields();
        $field->setLatitude('44.810328');
        $field->setLongitude('-0.611257');
        $field->setOwner($repoowner->findOneBy(['email'=>'yvan@exemple.com']));
        $manager->persist($field);

        $field = new Fields();
        $field->setLatitude('43.348180');
        $field->setLongitude('5.402228');
        $field->setOwner($repoowner->findOneBy(['email'=>'theo@exemple.com']));
        $manager->persist($field);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            WinegrowerFixtures::class,
        ];
    }
}
