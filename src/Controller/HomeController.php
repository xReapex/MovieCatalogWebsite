<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Repository\AdminRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\User;
use App\Form\CommentFormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class HomeController extends AbstractController
{
    private $twig;
    private $repository;
    private $adminRepository;

    public function __construct(Environment $twig, UserRepository $repository, AdminRepository $adminRepository)
    {
        $this->twig = $twig;
        $this->repository = $repository;
        $this->adminRepository = $adminRepository;
    }

    /**
     * @Route("/")
     */
    public function redirectHome()
    {
        return $this->redirectToRoute('homepage', ['_locale' => 'en']);
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/")
     */
    public function redirectLocaleHome()
    {
        return $this->redirectToRoute('homepage', ['_locale' => 'en']);
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/home",  name="homepage")
     * @return Response
     */
    public function showHome()
    {
        if ($this->getUser() !== null){
            $username = $this->getUser()->getUsername();
            return $this->render('home/home.html.twig', [
                'username' => $username
            ]);
        }
        else{
            return $this->render('home/home.html.twig');
        }
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/register", name="register_user")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @param NotifierInterface $notifier
     * @return Response
     */
    public function createUser(Request $request, UserPasswordEncoderInterface $encoder, NotifierInterface $notifier)
    {

        $user = new Admin();
        $form = $this->createForm(FormType::class, $user);

        $form
            ->add('Username', TextType::class, ['empty_data' => 'Default value'])
            ->add('Email', EmailType::class)
            ->add('Password', PasswordType::class)
            ->add('Submit', SubmitType::class);

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isValid()) {
                $hash = $encoder->encodePassword($user, $user->getPassword());

                $user->setPassword($hash);
                $user->setRoles(["ROLE_USER"]);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                return $this->redirectToRoute('user_show');
            }
        }

        return $this->render('user/form.html.twig', array(
            'form' => $form->createView()
        ));

    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/user", name="user_show")
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {

        $users = $paginator->paginate(
            $this->adminRepository->findLastest(),
            $request->query->getInt('page', 1),
            6);

        return $this->render('user/user.html.twig', [
            "current_menu" => 'users',
            'users' => $users
        ]);
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/user/delete/{id}", name="user_delete")
     * @param $id
     * @param AdminRepository $userRepository
     * @return RedirectResponse
     */
    public function deleteUser($id, AdminRepository $userRepository)
    {
        $user = $userRepository->find($id);
        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('user_show');
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/user/edit/{id}", name="user_edit")
     * @param Request $request
     * @param Admin $user
     * @param EntityManagerInterface $manager
     * @param UserPasswordEncoderInterface $encoder
     * @return RedirectResponse|Response
     */
    public function editUser(Request $request, Admin $user, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
    {
        $form = $this->createForm(FormType::class, $user);

        $form
            ->add('Username', TextType::class)
            ->add('Email', EmailType::class)
            ->add('Password', PasswordType::class)
            ->add('Submit', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $encoded = $encoder->encodePassword($user, $form->get('Password')->getData());
            $user->setPassword($encoded);

            $manager->flush();

            return $this->redirectToRoute('user_show');
        }

        return $this->render(
            'user/form.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }
}