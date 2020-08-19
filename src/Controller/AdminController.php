<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Repository\AdminRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/{_locale<%app.supported_locales%>}/user/change/{id}", name="changerole")
     * @param $id
     * @param AdminRepository $repository
     * @param Request $request
     * @return RedirectResponse
     */

    public function switchRole($id, AdminRepository $repository, Request $request)
    {
        $user = $repository->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        $locale = $request->getLocale();

        if ($user->getRoles() === ["ROLE_USER"]) {
            $user->setRoles(["ROLE_ADMIN"]);
            $entityManager->flush();

            if ($locale == "en"){
                $this->addFlash('success', 'The role of the user ' .$user->getId(). ' has been changed to "Admin"');
            }
            else{
                if ($locale == "fr"){
                    $this->addFlash('success', 'Le role de l\'utilisateur ' .$user->getId(). ' a été changé en "Admin"');
                }
            }
        }else{
            $user->setRoles(["ROLE_USER"]);
            $entityManager->flush();

            if ($locale == "en"){
                $this->addFlash('success', 'The role of the user ' .$user->getId(). ' has been changed to "User"');
            }
            else{
                if ($locale == "fr"){
                    $this->addFlash('success', 'Le role de l\'utilisateur ' .$user->getId(). ' a été changé en "User"');
                }
            }

        }

        return $this->redirectToRoute('user_show');

    }

}