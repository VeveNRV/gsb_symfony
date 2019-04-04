<?php

namespace AppliFraisBundle\Controller;

use AppliFraisBundle\Form\UtilisateurType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppliFraisBundle\Entity\Utilisateur;

/**
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * @Route("/index", name="admin_homepage")
     */
    public function indexAction(Request $request)
    {
        {
            $user = new Utilisateur();

            $form = $this->createForm(UtilisateurType::class, $user);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $user->setEnabled(true);
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($user);
                $manager->flush();
            }

            return $this->render('@AppliFrais/admin/index.html.twig', [
                'formUser' => $form->createView()
            ]);
        }
    }
}
