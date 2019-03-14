<?php

namespace AppliFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frais_Hors_Forfait
 *
 * @ORM\Table(name="frais__hors__forfait")
 * @ORM\Entity(repositoryClass="AppliFraisBundle\Repository\Frais_Hors_ForfaitRepository")
 */
class Frais_Hors_Forfait
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="ficheFrais", type="string", length=255)
     */
    /**
     * @ORM\OneToMany(targetEntity="Fiche_Frais", mappedBy="frais_hors_forfait")
     */
    private $ficheFrais;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Frais_Hors_Forfait
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Frais_Hors_Forfait
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set ficheFrais
     *
     * @param string $ficheFrais
     *
     * @return Frais_Hors_Forfait
     */
    public function setFicheFrais($ficheFrais)
    {
        $this->ficheFrais = $ficheFrais;

        return $this;
    }

    /**
     * Get ficheFrais
     *
     * @return string
     */
    public function getFicheFrais()
    {
        return $this->ficheFrais;
    }
}

