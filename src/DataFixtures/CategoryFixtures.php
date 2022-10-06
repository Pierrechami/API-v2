<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setName('Tracteur');
        $manager->persist($category);

        $category2 = new Category();
        $category2->setCategory($category);
        $category2->setName('Enjambeur');
        $manager->persist($category2);

        $category2 = new Category();
        $category2->setCategory($category);
        $category2->setName('Prétailleur');
        $manager->persist($category2);
        $manager->persist($category2);

        $category2 = new Category();
        $category2->setCategory($category);
        $category2->setName('Ecimeur');
        $manager->persist($category2);
 
        $category2 = new Category();
        $category2->setCategory($category);
        $category2->setName('Broyeur');
        $manager->persist($category2);

        $category2 = new Category();
        $category2->setCategory($category);
        $category2->setName('Effeuilleur');
        $manager->persist($category2);

        $category = new Category();
        $category->setName('Matériel');
        $manager->persist($category);

        $category2 = new Category();
        $category2->setCategory($category);
        $category2->setName('Laveuse');
        $manager->persist($category2);

        $category2 = new Category();
        $category2->setCategory($category);
        $category2->setName('Pompe');
        $manager->persist($category2);

        $category2 = new Category();
        $category2->setCategory($category);
        $category2->setName('Tireuse');
        $manager->persist($category2);

        $manager->flush();
    }
}
