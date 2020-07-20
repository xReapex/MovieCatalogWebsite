<?php

namespace App\Controller;

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

class HomeController extends AbstractController
{
    private $twig;
    private $repository;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
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
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/user/register", name="register_user")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @param NotifierInterface $notifier
     * @return Response
     */
    public function createUser(Request $request, UserPasswordEncoderInterface $encoder, NotifierInterface $notifier)
    {

        $user = new User();
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
     * @Route("/{_locale<%app.supported_locales%>}/user/{id}", name="user_show_id")
     * @param $id
     * @param UserRepository $userRepository
     * @return Response
     */
    public function showID($id, UserRepository $userRepository)
    {
        $user = $userRepository->find($id);

        if (!$user){
            throw $this->createNotFoundException(
                'Pas d\'utilisateur avec cet id !'.$id
            );
        }

        return new Response("Utilisateur trouvé: ".$user->getUsername());
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/user", name="user_show")
     * @param UserRepository $userRepository
     * @return Response
     */
    public function showUser(UserRepository $userRepository)
    {
        $users = $userRepository->findAll();

        return $this->render('user/user.html.twig', [
            "users" => $users,
        ]);
    }

    /**
     * @Route("/{_locale<%app.supported_locales%>}/user/delete/{id}", name="user_delete")
     * @param $id
     * @param UserRepository $userRepository
     * @return RedirectResponse
     */
    public function deleteUser($id, UserRepository $userRepository)
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
     * @param User $user
     * @param EntityManagerInterface $manager
     * @param UserPasswordEncoderInterface $encoder
     * @return RedirectResponse|Response
     */
    public function editArticle(Request $request, User $user, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
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