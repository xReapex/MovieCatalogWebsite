<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = Factory::create('fr_FR');

        for($i = 0; $i < 100; $i++){
            $user = new User();
            $user
                ->setUsername($faker->userName)
                ->setEmail($faker->email)
                ->setPassword($faker->password)
                ;

            $manager->persist($user);
        }

        // $product = new Product();


        $manager->flush();
    }
}
