<?php

namespace App\Controller;

use App\Repository\AdminRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FavoritesController extends AbstractController
{

    private $adminRepository;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/add_favorite/{id}", name="app.add_favorite")
     * @param $id
     */
    public function addFavorite($id)
    {
        // if return true => id already exists
        $exists = $this->adminRepository->isUserFavoriteIdExists($id);

        // if id doesnt exists => add to favorites
        if ($exists === false)
        {
            // add id
            $this->adminRepository->setFavoriteIdById($id);
        }
        else{
            // remove id
            $this->adminRepository->removeFavoriteId($id);
        }
        return $this->redirectToRoute('film.discover.id', [
            'id' => $id
        ]);
    }

    public function showFavoritesPage()
    {
        $this->render('favorites/favorites.html.twig');
    }

}