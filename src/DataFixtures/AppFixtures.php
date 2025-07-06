<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Movie;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie=new Movie();
        $movie->setMovieTitle('Inception');
        $movie->setDescription('A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.');
        $manager->persist($movie);
        $movie=new Movie();

        $movie->setMovieTitle('interstellar');
        $movie->setDescription('A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.');
        $manager->persist($movie);
        
        $movie=new Movie();
        $movie->setMovieTitle('The Dark Knight');
        $movie->setDescription('When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham. The Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.');
        $manager->persist($movie);

        $manager->flush();
    }
}
