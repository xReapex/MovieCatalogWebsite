<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Repository\AdminRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminController extends AbstractController
{

    /**
     * @Route("/{_locale<%app.supported_locales%>}/admin", name="admin")
     * @param AdminRepository $user
     * @return Response
     */

    public function showAdmin(AdminRepository $user)
    {
        return $this->render('admin/admin.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/removeusers", name="user.remove.all")
     * @param AdminRepository $repository
     * @param UserPasswordEncoderInterface $encoder
     * @return RedirectResponse
     */

    public function removeUsers(AdminRepository $repository, UserPasswordEncoderInterface $encoder)
    {
        $users = $repository->findAll();
        $entityManager = $this->getDoctrine()->getManager();

        foreach ($users as $user){
            $entityManager->remove($user);
            $entityManager->flush();
        }

        $user = new Admin();
        $hash = $encoder->encodePassword($user, 'superadmin');
        $user->setUsername("superadmin");
        $user->setEmail("super@super.super");
        $user->setRoles(["ROLE_SUPERADMIN"]);
        $user->setPassword($hash);
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute('user_show');
    }

}