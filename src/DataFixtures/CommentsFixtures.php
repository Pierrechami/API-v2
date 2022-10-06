<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Comments;
use App\Entity\Products;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CommentsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $user = $manager->getRepository(User::class);
        $product = $manager->getRepository(Products::class);

        $comments1 = new Comments();
        $comments1->setContent('Super');
        $comments1->setRate(5);
        $comments1->setUser($user->findOneBy(['email'=>'vitico@exemple.com']));
        $comments1->setProduct($product->findOneBy(['name'=>'Laveuse de bouteille']));
        $manager->persist($comments1);

        $comments2 = new Comments();
        $comments2->setContent('Je ne suis pas fan');
        $comments2->setRate(1);
        $comments2->setUser($user->findOneBy(['email'=>'pierre@exemple.com']));
        $comments2->setProduct($product->findOneBy(['name'=>'Pompe à vin']));
        $manager->persist($comments2);


        $comments3 = new Comments();
        $comments3->setContent('Je recommande');
        $comments3->setRate(3);
        $comments3->setUser($user->findOneBy(['email'=>'agrotech@exemple.com']));
        $comments3->setProduct($product->findOneBy(['name'=>'Pompe à vin']));
        $manager->persist($comments3);

        
        $comments4 = new Comments();
        $comments4->setContent('J\'ai adoré');
        $comments4->setRate(5);
        $comments4->setUser($user->findOneBy(['email'=>'yvan@exemple.com']));
        $comments4->setProduct($product->findOneBy(['name'=>'Tireuse Boucheuse']));
        $manager->persist($comments4);

        
        $comments5 = new Comments();
        $comments5->setContent('Je ne recommande pas');
        $comments5->setRate(1);
        $comments5->setUser($user->findOneBy(['email'=>'theo@exemple.com']));
        $comments5->setProduct($product->findOneBy(['name'=>'Broyeur sp 50 Provitis']));
        $manager->persist($comments5);


        $comments6 = new Comments();
        $comments6->setContent('Je ne suis pas satisfaite');
        $comments6->setRate(1);
        $comments6->setUser($user->findOneBy(['email'=>'vitico@exemple.com']));
        $comments6->setProduct($product->findOneBy(['name'=>'Pompe à vin']));
        $manager->persist($comments6);


        $comments7 = new Comments();
        $comments7->setContent('Je suis satisfaite');
        $comments7->setRate(4);
        $comments7->setUser($user->findOneBy(['email'=>'pierre@exemple.com']));
        $comments7->setProduct($product->findOneBy(['name'=>'Laveuse de bouteille']));
        $manager->persist($comments7);

        
        $comments8 = new Comments();
        $comments8->setContent('Je suis très satisfaite');
        $comments8->setRate(5);
        $comments8->setUser($user->findOneBy(['email'=>'vitico@exemple.com']));
        $comments8->setProduct($product->findOneBy(['name'=>'Effeuilleuse Eco Jet']));
        $manager->persist($comments8);

        
        $comments9 = new Comments();
        $comments9->setContent('Pour moi c\'est un bon produit');
        $comments9->setRate(4);
        $comments9->setUser($user->findOneBy(['email'=>'pierre@exemple.com']));
        $comments9->setProduct($product->findOneBy(['name'=>'Broyeur sp 50 Provitis']));
        $manager->persist($comments9);


        $comments10 = new Comments();
        $comments10->setContent('Je pense que je vais le recommander');
        $comments10->setRate(4);
        $comments10->setUser($user->findOneBy(['email'=>'agrotech@exemple.com']));
        $comments10->setProduct($product->findOneBy(['name'=>'L’écimeuse 2 rangs sur bogie']));
        $manager->persist($comments10);


        $comments11 = new Comments();
        $comments11->setContent('Je pense que je ne vais pas le recommander');
        $comments11->setRate(1);
        $comments11->setUser($user->findOneBy(['email'=>'yvan@exemple.com']));
        $comments11->setProduct($product->findOneBy(['name'=>'Prétailleuses disco et visio multiviti']));
        $manager->persist($comments11);


        $comments12 = new Comments();
        $comments12->setContent('Ce produit est génial');
        $comments12->setRate(5);
        $comments12->setUser($user->findOneBy(['email'=>'theo@exemple.com']));
        $comments12->setProduct($product->findOneBy(['name'=>'Tracteur enjambeur Polyvalen']));
        $manager->persist($comments12);


        $comments13 = new Comments();
        $comments13->setContent('Ce produit est décevant');
        $comments13->setRate(1);
        $comments13->setUser($user->findOneBy(['email'=>'vitico@exemple.com']));
        $comments13->setProduct($product->findOneBy(['name'=>'Tracteur enjambeur Polyvalen']));
        $manager->persist($comments13);


        $comments14 = new Comments();
        $comments14->setContent('Je suis satisfaite de ce produit');
        $comments14->setRate(4);
        $comments14->setUser($user->findOneBy(['email'=>'pierre@exemple.com']));
        $comments14->setProduct($product->findOneBy(['name'=>'Prétailleuses disco et visio multiviti']));

        $comments15 = new Comments();
        $comments15->setContent('Je suis très satisfaite de ce produit');
        $comments15->setRate(5);
        $comments15->setUser($user->findOneBy(['email'=>'pierre@exemple.com']));
        $comments15->setProduct($product->findOneBy(['name'=>'L’écimeuse 2 rangs sur bogie']));
        $manager->persist($comments15);


        $comments16 = new Comments();
        $comments16->setContent('Je suis très déçue de ce produit');
        $comments16->setRate(1);
        $comments16->setUser($user->findOneBy(['email'=>'pierre@exemple.com']));
        $comments16->setProduct($product->findOneBy(['name'=>'Broyeur sp 50 Provitis']));
        $manager->persist($comments16);


        $comments17 = new Comments();
        $comments17->setContent('Super, ce produit est parfait');
        $comments17->setRate(5);
        $comments17->setUser($user->findOneBy(['email'=>'vitico@exemple.com']));
        $comments17->setProduct($product->findOneBy(['name'=>'Effeuilleuse Eco Jet']));
        $manager->persist($comments17);


        $comments18 = new Comments();
        $comments18->setContent('Dommage, ce produit est nul');
        $comments18->setRate(1);
        $comments18->setUser($user->findOneBy(['email'=>'theo@exemple.com']));
        $comments18->setProduct($product->findOneBy(['name'=>'Laveuse de bouteille']));
        $manager->persist($comments18);


        $comments19 = new Comments();
        $comments19->setContent('Vraiment déçue');
        $comments19->setRate(1);
        $comments19->setUser($user->findOneBy(['email'=>'agrotech@exemple.com']));
        $comments19->setProduct($product->findOneBy(['name'=>'Pompe à vin']));
        $manager->persist($comments19);


        $comments20 = new Comments();
        $comments20->setContent('Je suis satisfaite');
        $comments20->setRate(4);
        $comments20->setUser($user->findOneBy(['email'=>'agrotech@exemple.com']));
        $comments20->setProduct($product->findOneBy(['name'=>'Tireuse Boucheuse']));
        $manager->persist($comments20);



        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }
}