<?php

namespace AppliFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('@AppliFrais/front/index.html.twig');
    }

    /**
     * @Route("/ficheFrais_user", name="ficheFrais_user")
     */
    public function connexionAction(Request $request)
    {
        return $this->render('@AppliFrais/front/ficheFrais_user.html.twig');
    }
}
