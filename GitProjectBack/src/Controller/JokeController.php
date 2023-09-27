<?php

namespace App\Controller;

use App\Entity\Joke;
use App\Entity\jokes;
use App\Repository\JokeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class JokeController extends AbstractController
{
    #[Route('/api/jokes', name: 'api_jokes')]
    public function apiJokes(JokeRepository $jokeRepository): JsonResponse
    {
        $jokes = $jokeRepository->findAll();

        // Convertissez les blagues en tableau associatif
        $jokesData = [];
        foreach ($jokes as $joke) {
            $jokesData[] = [
                'id' => $joke->getId(),
                'title' => $joke->getTitle(),
                'content' => $joke->getContent(),
                'creationDate' => $joke->getCreationDate(),
                'author' => $joke->getAuthor()
            ];
        }

        // Créez une réponse JSON
        $response = new JsonResponse($jokesData);

        // Ajoutez l'en-tête "Access-Control-Allow-Origin" pour autoriser les requêtes CORS depuis n'importe quelle origine
        $response->headers->set('Access-Control-Allow-Origin', '*');

        // Retournez la réponse
        return $response;
    }

    #[Route('/api/jokes/{id}', name: 'api_joke_show')]
    public function apiJokeShow(Joke $joke): JsonResponse
    {
        // Convertissez le produit en tableau associatif
        $jokeData = [
            'id' => $joke->getId(),
            'title' => $joke->getTitle(),
            'content' => $joke->getContent(),
            'creationDate' => $joke->getCreationDate(),
            'author' => $joke->getAuthor()
        ];

        // Créez une réponse JSON
        $response = new JsonResponse($jokeData);

        // Ajoutez l'en-tête "Access-Control-Allow-Origin" pour autoriser les requêtes CORS depuis n'importe quelle origine
        $response->headers->set('Access-Control-Allow-Origin', '*');

        // Retournez la réponse
        return $response;
    }
}
