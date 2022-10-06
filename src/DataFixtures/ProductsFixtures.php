<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Category;
use App\Entity\Products;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProductsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $user = $manager->getRepository(User::class);
        $category = $manager->getRepository(category::class);



        $products1 = new Products();
        $products1->setName('Tracteur enjambeur Polyvalen');
        $products1->setDescription('Tracteur enjambeur à voie variable polyvalent pour vignes de 0.90 à 1.50m , Polyvalence, Module de récolte Cellule de pulvérisation ISO Ultima');
        $products1->setBrand('GREGOIRE');
        $products1->setImage1('https://www.vignovin.com/images/stories/partenaires/gregoire/actualites/g5-310-320/g5-320-tracteur-vigne-etroite.jpg');
        $products1->setImage2('https://www.vignovin.com/images/stories/partenaires/gregoire/actualites/g5-310-320/pulverisation-vigne-etroite-polyvalent-tracteur-enjambeur-g5.jpg');
        $products1->setImage3('https://www.reussir.fr/vigne/sites/vigne/files/Gr%C3%A9goire%20GSE%20%2B%20GS4%20%2B%20G5%20%28basse%20def%29.jpg');
        $products1->setImage4('https://www.reussir.fr/vigne/sites/vigne/files/styles/normal_size/public/Gr%C3%A9goire%20GSE%20maniabilit%C3%A9%20%28basse%20def%29.jpg.webp?itok=yCBLUYpX');
        $products1->setImage5('https://i.ytimg.com/vi/FeuKVxyP9M4/maxresdefault.jpg');
        $products1->setPurchasePrice(230985); // prix achat 
        $products1->setLocationPrice(250); 
        $products1->setCautionPrice(5000);
        $products1->setIsPublished(true);
        $products1->setOwner($user->findOneBy(['email'=>'vitico@exemple.com']));
        $products1->setCategory($category->findOneBy(['name'=>'Enjambeur']));
        $manager->persist($products1);


        $products2 = new Products();
        $products2->setName('Prétailleuses disco et visio multiviti');
        $products2->setDescription('La prétailleuse DISCO vous offre un travail de qualité à moindre coût. Sa légèreté lui permet de travailler dans toutes les parcelles, même en relief difficile.Performante, très rapide, la prétailleuse VISIO vous apporte une qualité de coupe et d’émiettage supérieure à celle des modèles à disques, même en forte végétation.');
        $products2->setBrand('PELLENC');
        $products2->setImage1('https://pellenc-back.vertuoz.fr/cdn/v1.0/image/tabs-vertical_xl_resize/user__5__PRODUITS__Chassis-Multiviti-20-40__focus-pretailleuse-disco-multivi-rec-pellenc.webp?ext=jpg');
        $products2->setImage2('https://pellenc-back.vertuoz.fr/cdn/v1.0/image/tabs-vertical_xl_resize/user__5__PRODUITS__Pretailleuse-Disco__focus-bare-coupe-lateral-rec-pellenc.webp?ext=jpg');
        $products2->setImage3('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNWKZfpmuLqHT5c284XCA9cQuVg5bcpya8XwBeW50-e-buXV8g4Rl6wg1bYdO31vAPNfk&usqp=CAU');
        $products2->setImage4(null);
        $products2->setImage5(null);
        $products2->setPurchasePrice(199000); // prix achat 
        $products2->setLocationPrice(220); 
        $products2->setCautionPrice(4500);
        $products2->setIsPublished(true);
        $products2->setOwner($user->findOneBy(['email'=>'pierre@exemple.com']));
        $products2->setCategory($category->findOneBy(['name'=>'Prétailleur']));
        $manager->persist($products2);


        $products3 = new Products();
        $products3->setName('L’écimeuse 2 rangs sur bogie');
        $products3->setDescription("L'écimeuse sur bogie 2 rangs assure un écimage de qualité pour vos vignes grâce aux coupes franches des couteaux rotatifs. Le positionnement arrière de l'outil garantit une excellente vision sur le rang afin d'écimer en toute liberté.");
        $products3->setBrand('PELLENC');
        $products3->setImage1('https://img.agriexpo.online/fr/images_ag/photo-g/168153-17034610.jpg');
        $products3->setImage2('https://pellenc-back.vertuoz.fr/cdn/v1.0/image/slider-tabs-tab-image_xl_resize/user__9__PRODUITS-VERTUOZ__Ecimeuse-2-rangs-frontale__atouts-essentiels-productivite-frontale-rec.webp?ext=jpg');
        $products3->setImage3('https://pellenc-back.vertuoz.fr/cdn/v1.0/image/slider-tabs-tab-image_xl_resize/user__5__PRODUITS__Ecimeuse-2-rangs-sur-bogie__atouts-essentiels-productif-ecimeuse-bogie-rec.webp?ext=jpg');
        $products3->setImage4('https://pellenc-back.vertuoz.fr/uploads/user/5/PRODUITS/Ecimeuse-2-rangs-sur-bogie/illustration-legende-ecimeuse-2-rang-bogie.jpg');
        $products3->setImage5(null);
        $products3->setPurchasePrice(178000); // prix achat 
        $products3->setLocationPrice(190); 
        $products3->setCautionPrice(3500);
        $products3->setIsPublished(true);
        $products3->setOwner($user->findOneBy(['email'=>'agrotech@exemple.com']));
        $products3->setCategory($category->findOneBy(['name'=>'Ecimeur']));
        $manager->persist($products3);


        
       
        $products4 = new Products();
        $products4->setName('Broyeur sp 50 Provitis');
        $products4->setDescription("Les sarments sont ramassés par un pick-up à dents amovibles et sont convoyés vers une chambre de broyage équipée d’un rotor à marteaux crantés avec contre marteaux. Une fois broyés les sarments sont expulsés à travers une grille d’affinage.");
        $products4->setBrand('TSM Viti-Vitni');
        $products4->setImage1('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/10/IMG_4136.jpg');
        $products4->setImage2('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/10/IMG_3838.jpg');
        $products4->setImage3('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/10/IMG_4049-rotated.jpg');
        $products4->setImage4(null);
        $products4->setImage5(null);
        $products4->setPurchasePrice(5000); // prix achat 
        $products4->setLocationPrice(50); 
        $products4->setCautionPrice(1000);
        $products4->setIsPublished(true);
        $products4->setOwner($user->findOneBy(['email'=>'yvan@exemple.com']));
        $products4->setCategory($category->findOneBy(['name'=>'Broyeur']));
        $manager->persist($products4);



        $products5 = new Products();
        $products5->setName('Effeuilleuse Eco Jet');
        $products5->setDescription("L’action: L’optimisation de l’air nous permet d’avoir un meilleur rendement, une vitesse d’avancement plus élevée, une qualité d’effeuillage maximale sans contrainte mécanique sur la végétation dans le plus grand respect de la récolte. Sur la vigne : L’effeuillage permet une diminution du botrytis en favorisant l’aération ainsi que la pénétration des produits phytosanitaires. Très tôt, il favorise une synthèse plus importante des polyphénols, et plus tard, il contribue à améliorer le temps de récolte manuel.");
        $products5->setBrand('Stentz');
        $products5->setImage1('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/11/IMG_3502.jpg');
        $products5->setImage2('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/11/IMG_3504.jpg');
        $products5->setImage3('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/11/IMG_3505.jpg');
        $products5->setImage4('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/11/IMG_3509.jpg');
        $products5->setImage5('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/11/IMG_8307.jpg');
        $products5->setPurchasePrice(5000); 
        $products5->setLocationPrice(50); 
        $products5->setCautionPrice(1000);
        $products5->setIsPublished(true);
        $products5->setOwner($user->findOneBy(['email'=>'theo@exemple.com']));
        $products5->setCategory($category->findOneBy(['name'=>'Effeuilleur']));
        $manager->persist($products5);

        
        $products6 = new Products();
        $products6->setName('Laveuse de bouteille');
        $products6->setDescription("Que vos bouteilles ou récipients soient très sales ou légèrement poussiéreux, Que vous souhaitiez nettoyer l'extérieur de vos récipients juste après le remplissage ou après une période de stockage, Que vous ayez le besoin de laver puis de sécher ou uniquement laver ou encore uniquement sécher tout ou partie de vos récipients,");
        $products6->setBrand('Stentz');
        $products6->setImage1('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/10/IMG_4153.jpg');
        $products6->setImage2('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/10/IMG_4142.jpg');
        $products6->setImage3('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/10/IMG_4143.jpg');
        $products6->setImage4(null);
        $products6->setImage5(null);
        $products6->setPurchasePrice(20000); 
        $products6->setLocationPrice(150); 
        $products6->setCautionPrice(800);
        $products6->setIsPublished(true);
        $products6->setOwner($user->findOneBy(['email'=>'vitico@exemple.com']));
        $products6->setCategory($category->findOneBy(['name'=>'Laveuse']));
        $manager->persist($products6);


        $products7 = new Products();
        $products7->setName('Pompe à vin');
        $products7->setDescription("Le rotor est en caoutchouc de qualité alimentaire: son mouvement crée un flux continu qui respecte les caractéristiques organoleptiques du produit, en evitant le ballottement. La vitesse peut être réduit grâce à un motoréducteur. Cela permet de protéger la qualité du produit pendant le transfert.");
        $products7->setBrand('VIT VINIF');
        $products7->setImage1('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/11/IMG_6004.jpg');
        $products7->setImage2('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/11/BOITIER-RADIOCOMMANDE-scaled.jpg');
        $products7->setImage3('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/11/IMG_4154.jpg');
        $products7->setImage4('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/11/IMG_4155.jpg');
        $products7->setImage5(null);
        $products7->setPurchasePrice(934); 
        $products7->setLocationPrice(45); 
        $products7->setCautionPrice(350);
        $products7->setIsPublished(true);
        $products7->setOwner($user->findOneBy(['email'=>'pierre@exemple.com']));
        $products7->setCategory($category->findOneBy(['name'=>'Pompe']));
        $manager->persist($products7);

       

        $products8 = new Products();
        $products8->setName('Tireuse Boucheuse');
        $products8->setDescription("A la sortie, les bouteilles arrivent sur une table d’accumulation rotative de diamètre 450mm. La variation de vitesse par variateur de fréquence permet un réglage précis de la cadence de travail et un synchronisme parfait de tous les mécanismes. La machine est équipée pour un type de bouteille cylindrique et d’une protection de sécurité répondant à la législation en vigueur. Sa cadence maximale est de 2.000 bouteilles/heure selon l'alimentation des bouteilles par l’opérateur.");
        $products8->setBrand('Costral');
        $products8->setImage1('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/10/IMG_3592-scaled.jpg');
        $products8->setImage2('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/10/IMG_3590-scaled.jpg');
        $products8->setImage3('https://www.materiel-vinification-viticulture.fr/wp-content/uploads/sites/8215/2020/10/IMG_3591-scaled.jpg');
        $products8->setImage4(null);
        $products8->setImage5(null);
        $products8->setPurchasePrice(37800); 
        $products8->setLocationPrice(750); 
        $products8->setCautionPrice(3500);
        $products8->setIsPublished(true);
        $products8->setOwner($user->findOneBy(['email'=>'pierre@exemple.com']));
        $products8->setCategory($category->findOneBy(['name'=>'Tireuse']));
        $manager->persist($products8);


        $manager->flush();

    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }
}

