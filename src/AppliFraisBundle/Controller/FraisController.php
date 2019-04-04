<?php

namespace AppliFraisBundle\Controller;

use AppliFraisBundle\Entity\Frais_Forfait;
use AppliFraisBundle\Entity\Frais_Hors_Forfait;
use AppliFraisBundle\Form\Frais_ForfaitType;
use AppliFraisBundle\Form\Frais_Hors_ForfaitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/visiteur/index", name="fiche-du-mois")
 */
class FraisController extends Controller
{
    /**
     * @Route("/", name="fiche-du-mois")
     */
    public function fiche_frais(Request $request) {


        $fraisForfait = new Frais_Forfait();
        $formForfait = $this->createForm(Frais_ForfaitType::class, $fraisForfait);
        $formForfait->handleRequest($request);

        $fraisHorsForfait = new Frais_Hors_Forfait();
        $formHorsForfait = $this->createForm(Frais_Hors_ForfaitType::class, $fraisHorsForfait);
        $formHorsForfait->handleRequest($request);

        return $this->render('@AppliFrais/visiteur/index.html.twig', [
            'formForfait' => $formForfait->createView(),
            'formHorsForfait' => $formHorsForfait->createView()
        ]);
    }


}
