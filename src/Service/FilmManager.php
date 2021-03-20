<?php

namespace App\Service;

use App\Repository\AdminRepository;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Security\Core\Security;
use Twig\Environment;

use Symfony\Component\HttpFoundation\RequestStack;

class FilmManager
{

    private $twig;
    private $http;
    private $params;
    private $api_key;
    private $baseUrl;
    protected $requestStack;
    private $adminRepository;

    public function __construct(ContainerBagInterface $params, string $apiKey, string $baseUrl, Environment $twig, RequestStack $requestStack, Security $security, AdminRepository $adminRepository)
    {

        $this->api_key = $apiKey;
        $this->params = $params;
        $this->http = HttpClient::create();
        $this->baseUrl = $baseUrl;
        $this->twig = $twig;
        $this->requestStack = $requestStack;
        $this->adminRepository = $adminRepository;
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

            if (!array_key_exists(0, $content[$i])){
                $stars = ($content[$i]['vote_average'])/2;
            }
            else{
                $stars = (($content[$i][0]['vote_average'])/2);
            }

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
                    $res[$i] = '<html><body><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i></body></html>';
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

        if (!isset($res)) {}
        else{
            return $res;
        }

    }

    public function syncStars($array, $stars, $n)
    {

        if ($n == 0){
            $i=0;
            foreach ($array as $item)
            {
                if (!array_key_exists($i, $array) or !array_key_exists($i, $stars)){
                }else{

                    $array[$i]['vote_average'] = $stars[$i];
                }
                $i++;
            }
            return $array;
        }else{
            if ($n == 1){
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
        }


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

    public function getMovieById($id)
    {
        return $this->http->request(
            'GET',
            "https://api.themoviedb.org/3/movie/$id?api_key=e3ff3545d663f593379a9b36980989d8&language=fr-FR"
        );
    }

    public function getMovieByName($name)
    {
        return $this->http->request(
            'GET',
            "https://api.themoviedb.org/3/search/movie?api_key=e3ff3545d663f593379a9b36980989d8&language=fr-FR&query=$name&page=1&include_adult=false"
        );
    }

    public function getAllGenre($locale)
    {
        if ($locale == "fr"){
            $locale1 = "fr-FR";
        }else{
            $locale1 = "en-US";
        }

        $response = $this->http->request('GET', "https://api.themoviedb.org/3/genre/movie/list?api_key=$this->api_key&language=$locale1");
        return $response->toArray();
    }

    public function getMoviesByGenre($genre)
    {
        $response = $this->http->request('GET', "https://api.themoviedb.org/3/discover/movie?api_key=$this->api_key&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_genres=$genre");
        return $response->toArray();
    }

    public function isFavoriteIcon($id)
    {
        $exists = $this->adminRepository->isUserFavoriteIdExists($id);

        if ($exists)
        {
            // if true
            return "<i class=\"text-warning fas fa-star\"></i>";
        }
        else{
            return "<i class=\"text-warning far fa-star\"></i>";
        }
    }

}