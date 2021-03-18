<?php

namespace App\Controller;

use App\Service\FilmManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Amp\Iterator\toArray;

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
        $res = $films->syncStars($res, $stars, 1);
        $genre = $films->getGenre($res);

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

            return $this->render('film/id.html.twig', [
                "film" => $res->toArray()
            ]);
        }
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/search", name="search.film")
     * @param Request $request
     * @param FilmManager $filmManager
     */

    public function search(Request $request, FilmManager $filmManager)
    {
        $search = $request->request->get('search');

        $response = $filmManager->getMovieByName($search)->toArray()['results'];

        $stars = $filmManager->getStars($response);
        $response = $filmManager->syncStars($response, $stars, 0);

        return $this->render('film/search.html.twig', [
            "films" => $response
        ]);
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/genres", name="show.genres")
     * @param FilmManager $filmManager
     * @param Request $request
     * @return Response
     */
    public function show(FilmManager $filmManager, Request $request)
    {
        $locale = $request->getLocale();

        $genres = $filmManager->getAllGenre($locale)['genres'];

        return $this->render('film/genre.html.twig', [
            "genres" => $genres
        ]);
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/genre/{genre}", name="order.genre")
     * @param $genre
     * @param Request $request
     * @param FilmManager $filmManager
     */

    public function showByGenre($genre, Request $request, FilmManager $filmManager)
    {
        $locale = $request->getLocale();
        $res = $filmManager->getMoviesByGenre($genre)['results'];
        $stars = $filmManager->getStars($res);
        $response = $filmManager->syncStars($res, $stars, 0);

        return $this->render('film/search.html.twig', [
           "films" => $response
        ]);

    }

}