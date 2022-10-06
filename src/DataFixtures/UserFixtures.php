<?php

namespace App\DataFixtures;

use App\Entity\City;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class UserFixtures extends Fixture implements DependentFixtureInterface
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $repocity = $manager->getRepository(City::class);

        $user = new User();
        $user->setEmail('vitico@exemple.com');
        $hashedPassword = $this->hasher->hashPassword(
            $user,
            'azerty'
        );
        $user->setPassword($hashedPassword);
        $user->setRoles(['ROLE_USER']);
        $user->setAddress('9 rue des oiseaux');
        $user->setTelephone('0612345678');
        $user->setProfilPicture('https://www.lurberri.fr/wp-content/uploads/2018/10/jeune-agriculteur-lurberri.jpg');
        $user->setCity($repocity->findOneBy(['name'=>'Bordeaux']));
        $manager->persist($user);

        $user = new User();
        $user->setEmail('pierre@exemple.com');
        $hashedPassword = $this->hasher->hashPassword(
            $user,
            'azerty123'
        );
        $user->setPassword($hashedPassword);
        $user->setRoles(['ROLE_USER']);
        $user->setAddress('8 avenue de la paix');
        $user->setTelephone('0798765432');
        $user->setProfilPicture('https://www.cogedis.com/app/uploads/2020/12/installation-jeune-agriculteur-630x420-c-center.jpg');
        $user->setCity($repocity->findOneBy(['name'=>'Bayonne']));
        $manager->persist($user);
        
        $user = new User();
        $user->setEmail('agrotech@exemple.com');
        $hashedPassword = $this->hasher->hashPassword(
            $user,
            'azerty33'
        );
        $user->setPassword($hashedPassword);
        $user->setRoles(['ROLE_USER']);
        $user->setAddress('17 bis rue de l\'avenue');
        $user->setTelephone('0626543568');
        $user->setProfilPicture('https://www.agriculteurs-de-bretagne.fr/wp-content/uploads/2021/03/portrait-agriculteur-1-960x750.jpg');
        $user->setCity($repocity->findOneBy(['name'=>'Paris']));
        $manager->persist($user);
   
        $user = new User();
        $user->setEmail('yvan@exemple.com');
        $hashedPassword = $this->hasher->hashPassword(
            $user,
            'yvan'
        );
        $user->setPassword($hashedPassword);
        $user->setRoles(['ROLE_USER']);
        $user->setAddress('2 chemin de la rue');
        $user->setTelephone('0601293846');
        $user->setProfilPicture('https://d1yt6rol3hd1gx.cloudfront.net/media/images/iStock-92216762.2e16d0ba.fill-960x680-c100.jpg');
        $user->setCity($repocity->findOneBy(['name'=>'Bordeaux']));
        $manager->persist($user);
        
        $user = new User();
        $user->setEmail('theo@exemple.com');
        $hashedPassword = $this->hasher->hashPassword(
            $user,
            'theo'
        );
        $user->setPassword($hashedPassword);
        $user->setRoles(['ROLE_USER']);
        $user->setAddress('26 voie de la rue chemin');
        $user->setTelephone('0727358067');
        $user->setProfilPicture('https://www.semencemag.fr/photos/itw-maxime-gautreau.jpg');
        $user->setCity($repocity->findOneBy(['name'=>'Marseille']));
        $manager->persist($user);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CityFixtures::class,
        ];
    }
}
