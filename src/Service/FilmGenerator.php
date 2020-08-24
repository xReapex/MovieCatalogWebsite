<?php

namespace App\Service;

use League\Uri\Http;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\HttpClient\HttpClient;

class FilmGenerator
{

    private $http;
    private $params;
    private $api_key;

    public function __construct(ContainerBagInterface $params)
    {
        $this->params = $params;
        $this->http = HttpClient::create();
    }

    private function getData()
    {
        $api_key = $this->params->get('app.tmdb_key');
        $url = "https://api.themoviedb.org/3/discover/movie?api_key=".$api_key."&language=fr-FR";
        $response = $this->http->request('GET', $url);
        return $response->toArray();
    }

    public function discover($limit)
    {
        $content = $this->getData();

        for ($i = 0; $i < $limit; $i++){
            $res[$i] = [$content['results'][$i]];
        }
        return $res;
    }

    public function getStars($note)
    {
        switch ($note)
        {
            case in_array($note, range(0,0.5)):
                die("ok");
        }
    }
}