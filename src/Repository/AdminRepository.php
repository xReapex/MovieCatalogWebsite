<?php

namespace App\Repository;

use App\Entity\Admin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method Admin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Admin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Admin[]    findAll()
 * @method Admin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    private $manager;
    private $security;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager, Security $security)
    {
        parent::__construct($registry, Admin::class);
        $this->manager = $manager;
        $this->security = $security;
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     * @param UserInterface $user
     * @param string $newEncodedPassword
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof Admin) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    // /**
    //  * @return Admin[] Returns an array of Admin objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Admin
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    /**
     * @return Query
     */
    public function findLastest(): Query
    {
        return $this->createQueryBuilder('p')
            ->setMaxResults(3)
            ->addOrderBy('p.id', 'ASC')
            ->getQuery();
    }

    public function setFavoriteIdById($id)
    {
        $user = $this->find($this->security->getUser()->getId());
        $array = $user->getFavoritesId();
        array_push($array, $id);
        $user->setFavoritesId($array);
        $this->manager->persist($user);
        $this->manager->flush();
    }

    public function removeFavoriteId($id)
    {
        // get favorites
        $user = $this->find($this->security->getUser()->getId());
        $currentFavorites = $user->getFavoritesId();

        // remove id
        if (($key = array_search($id, $currentFavorites)) !== false) {
            unset($currentFavorites[$key]);
        }

        // push user
        $user->setFavoritesId($currentFavorites);
        $this->manager->persist($user);
        $this->manager->flush();
    }

    public function isUserFavoriteIdExists($id)
    {
        $user = $this->find($this->security->getUser()->getId());
        $currentFavorites = $user->getFavoritesId();

        if (in_array($id, $currentFavorites))
        {
            return true;
        }
        return false;
    }

}
