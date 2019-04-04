<?php

namespace AppliFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/visiteur")
 */
class VisiteurController extends Controller
{
    /**
     * @Route("/index", name="visiteur_homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('@AppliFrais/visiteur/index.html.twig');
    }


}
