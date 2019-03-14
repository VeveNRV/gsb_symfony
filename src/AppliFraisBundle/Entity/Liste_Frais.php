<?php

namespace AppliFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liste_Frais
 *
 * @ORM\Table(name="liste__frais")
 * @ORM\Entity(repositoryClass="AppliFraisBundle\Repository\Liste_FraisRepository")
 */
class Liste_Frais
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="fraisForfait", type="string", length=255)
     */
    /**
     * @ORM\OneToMany(targetEntity="Frais_Forfait", mappedBy="Liste_Frais")
     */
    private $fraisForfait;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Liste_Frais
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Liste_Frais
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return int
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set fraisForfait
     *
     * @param string $fraisForfait
     *
     * @return Liste_Frais
     */
    public function setFraisForfait($fraisForfait)
    {
        $this->fraisForfait = $fraisForfait;

        return $this;
    }

    /**
     * Get fraisForfait
     *
     * @return string
     */
    public function getFraisForfait()
    {
        return $this->fraisForfait;
    }
}

