<?php

namespace AppliFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;



class SecurityController extends Controller
{
    /**
     * @Route("/redirect", name="redirect")
     */
    public function redirectAction(Request $request)
    {
        $user = $this->getUser();

        if($user->hasRole('ROLE_ADMIN')){
            return $this->redirectToRoute('admin_homepage');
        }
        else if($user->hasRole('ROLE_SUPER_ADMIN')){
            return $this->redirectToRoute('admin_homepage');
        } else if($user->hasRole('ROLE_COMPTABLE')){
            return $this->redirectToRoute('comptable_homepage');
        } else if($user->hasRole('ROLE_VISITEUR')){
            return $this->redirectToRoute('visiteur_homepage');
        }

        return $this->redirectToRoute('homepage');
    }

}
