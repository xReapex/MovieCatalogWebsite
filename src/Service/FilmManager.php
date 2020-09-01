<?php

namespace App\Service;

use http\Url;
use League\Uri\Http;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\HttpClient\HttpClient;

class FilmManager
{

    private $http;
    private $params;
    private $api_key;
    private $baseUrl;

    public function __construct(ContainerBagInterface $params, string $apiKey, string $baseUrl)
    {

        $this->api_key = $apiKey;
        $this->params = $params;
        $this->http = HttpClient::create();
        $this->baseUrl = $baseUrl;

    }

    private function getData()
    {
        $url = $this->baseUrl.$this->api_key."&language=fr-FR";
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

    public function getStars($content)
    {
        $i = 0;
        foreach ($content as $film){
            $stars = ($content[$i][0]['vote_average'])/2;
            switch ($stars)
            {
                case ($stars>0 and $stars<=0.5):
                    $res[$i] = '<html><body><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></body></html>';
                    break;
                case ($stars>0.5 and $stars<=1):
                    $res[$i] = '<html><body><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></body></html>';
                    break;
                case ($stars>1 and $stars<=1.5):
                    $res[$i] = '<html><body><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></body></html>';
                    break;
                case ($stars>1.5 and $stars<=2):
                    $res[$i] = '<html><body><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></body></html>';
                    break;
                case ($stars>2 and $stars<=2.5):
                    $res[$i] = '<html><body><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i></body></html>';
                    break;
                case ($stars>2.5 and $stars<=3):
                    $res[$i] = '<html><body><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></body></html>';
                    break;
                case ($stars>3 and $stars<=3.5):
                    $res[$i] = '<html><body><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></body></html>';
                    break;
                case ($stars>3.5 and $stars<=4):
                    $res[$i] = '<html><body><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></body></html>';
                    break;
                case ($stars>4 and $stars<=4.5):
                    $res[$i] = '<html><body><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></body></html>';
                    break;
                case ($stars>4.5 and $stars<=5):
                    $res[$i] = '<html><body><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></body></html>';
                    break;
            }
            $i++;
        }
        return $res;
    }

    public function syncStars($array, $stars)
    {
        $i=0;

        foreach ($array as $item)
        {
            if (!array_key_exists($i, $array) or !array_key_exists($i, $stars)){

            }else{
                $array[$i][0]['vote_average'] = $stars[$i];
            }
            $i++;
        }

        return $array;
    }

    public function getGenre($content)
    {
        $response = $this->http->request('GET', 'https://api.themoviedb.org/3/genre/movie/list?api_key=e3ff3545d663f593379a9b36980989d8&language=fr-FR');
        $res = $response->toArray();
        $genres = $res["genres"];

        foreach ($genres as $genre)
        {
            $allGenre[$genre['id']] = $genre['name'];
        }

        $moviesData = [];

        foreach ($content as $movie) {
             foreach ($movie as $item){
                 if(array_key_exists('genre_ids', $item)){
                     foreach ($item['genre_ids'] as $idGenre) {
                        if(array_key_exists($idGenre, $allGenre)){
                            $item['genre_name'][$idGenre] =$allGenre[$idGenre];
                        }
                     }

                 }
             }
            $moviesData[] = $item;
        }
        return $moviesData;
    }
}