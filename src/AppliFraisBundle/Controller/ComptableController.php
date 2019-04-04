<?php

namespace AppliFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/comptable")
 */
class ComptableController extends Controller
{
    /**
     * @Route("/index", name="comptable_homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('@AppliFrais/comptable/index.html.twig');
    }


}
