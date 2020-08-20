<?php

namespace App\DataFixtures;

use App\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for($i = 0; $i < 20; $i++) {
            $film = new Film();
            $film
                ->setTitle($faker->words($nb = 3, $asText = true))
                ->setImage($faker->imageUrl('800', '400', 'fashion', 'true', 'film'))
                ->setdate($faker->date($format = 'd-m-Y', $max = 'now'))
                ->setresume($faker->realText($maxNbChars = 2000, $indexSize = 2))
                ->setRealisateur($faker->name($gender = 'male'|'female'))
                ->setAnnonce($faker->url);

            $manager->persist($film);
        }

        $manager->flush();

    }

}
