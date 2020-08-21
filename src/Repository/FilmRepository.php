<?php

namespace App\Repository;

use App\Entity\Film;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpClient\HttpClient;

/**
 * @method Film|null find($id, $lockMode = null, $lockVersion = null)
 * @method Film|null findOneBy(array $criteria, array $orderBy = null)
 * @method Film[]    findAll()
 * @method Film[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FilmRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Film::class);
    }

    public function findLastest(): Query
    {
        return $this->createQueryBuilder('p')
            ->setMaxResults(3)
            ->addOrderBy('p.id', 'ASC')
            ->getQuery();
    }

    public function discover()
    {

        $res = [];
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie?api_key=e3ff3545d663f593379a9b36980989d8&language=fr-FR&region=FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1');
        $content = $response->toArray();

        for ($i = 0; $i < 3; $i++){
            $res[$i] = [$content['results'][$i]];
        }
        return $res;
    }
    
}
