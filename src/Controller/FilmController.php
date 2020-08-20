<?php

namespace App\Controller;

use App\Repository\FilmRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use VfacTmdb\Factory;
use VfacTmdb\Search;
use VfacTmdb\Item;

class FilmController extends AbstractController
{

    /**
     * @Route("/{_locale<%app.supported_locales%>}/film", name="film.discover")
     * @param FilmRepository $films
     * @return Response
     */

    public function discoverFilm(FilmRepository $films)
    {
        $tmdb = Factory::create()->getTmdb('e3ff3545d663f593379a9b36980989d8');
        $item = new Item($tmdb);
        $responses = $item->getMovie('11', array('language' => 'fr-FR'));

        foreach ($responses as $response)
        {
            echo $response->getTitle();
        }


        return $this->render('film/discover.html.twig');
    }

}