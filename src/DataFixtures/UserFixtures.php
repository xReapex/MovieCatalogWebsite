<?php

namespace App\DataFixtures;

use App\Entity\Admin;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encode;

    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encode = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        $faker = Factory::create('fr_FR');

        for($i = 0; $i < 100; $i++){
            $user = new Admin();
            $user
                ->setUsername($faker->userName)
                ->setEmail($faker->email)
                ->setRoles(["ROLE_USER"])
                ;

            $hash = $this->encode->encodePassword($user, $faker->password);
            $user->setPassword($hash);

            $manager->persist($user);
        }

        // $product = new Product();


        $manager->flush();
    }
}
