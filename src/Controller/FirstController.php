<?php

namespace App\Controller;

use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FirstController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function index(EntityManagerInterface $manager): Response
    { 
        $movie=new Movie();
        $movie->setMovie('The Matrix');
        $movie->setDescription('A computer hacker learns about the true nature of his reality and his role in the war against its controllers.');
        $manager->persist($movie);
        $manager->flush();
        return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }
}
