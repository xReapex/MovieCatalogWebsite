<?php

namespace App\Controller;

use App\Repository\FilmRepository;
use App\Service\FilmManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class FilmController extends AbstractController
{

    /**
     * @Route("/{_locale<%app.supported_locales%>}/film", name="film.discover")
     * @param FilmManager $films
     * @param Request $request
     * @return Response
     */

    public function discoverFilm(FilmManager $films, Request $request)
    {
        $res = $films->discover(20);

        $stars = $films->getStars($res);
        $res = $films->syncStars($res, $stars);

        $genre = $films->getGenre($res);
        dump($genre);
        die();

        return $this->render('film/discover.html.twig', [
            'films' => $res
        ]);
    }

}