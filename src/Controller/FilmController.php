<?php

namespace App\Controller;

use App\Repository\FilmRepository;
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
     * @param FilmRepository $films
     * @return Response
     */

    public function discoverFilm(FilmRepository $films)
    {
        $res = $films->discover();
        return $this->render('film/discover.html.twig', [
            'films' => $res
        ]);
    }

}