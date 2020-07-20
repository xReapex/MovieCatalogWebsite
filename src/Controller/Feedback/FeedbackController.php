<?php

namespace App\Controller\Feedback;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

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
