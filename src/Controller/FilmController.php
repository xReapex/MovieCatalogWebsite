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
     * @Route("/{_locale<%app.supported_locales%>}/discover", name="film.discover")
     * @param FilmManager $films
     * @param Request $request
     * @return Response
     */

    public function discoverFilm(FilmManager $films, Request $request)
    {
        $res = $films->discover(18);

        $stars = $films->getStars($res);
        $res = $films->syncStars($res, $stars);
        $genre = $films->getGenre($res);
        dump($genre);

        return $this->render('film/discover.html.twig', [
            'films' => $genre
        ]);
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/film/{id}", name="film.discover.id")
     * @param $id
     * @param FilmManager $films
     */

    public function showId($id, FilmManager $films)
    {
        $res = $films->getMovieById($id);

        $statusCode = $res->getStatusCode();
        if($statusCode != 200)
        {
            return $this->render('error.html.twig', [
                "code" => $statusCode
            ]);
        }else{

            dump($res->toArray());

            return $this->render('film/id.html.twig', [
                "film" => $res->toArray()
            ]);
        }
    }

}