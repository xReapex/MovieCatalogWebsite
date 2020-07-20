<?php

namespace App\Controller\Feedback;

use Doctrine\DBAL\Types\StringType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Feedback;

class FeedbackController extends AbstractController
{

    /**
     * @Route("/{_locale<%app.supported_locales%>}/feedback", name="feedback")
     */
    public function index()
    {
        return $this->render('feedback/index.html.twig');
    }


}
