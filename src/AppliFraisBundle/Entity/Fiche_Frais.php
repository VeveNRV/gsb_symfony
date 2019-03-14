<?php

namespace AppliFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fiche_Frais
 *
 * @ORM\Table(name="fiche__frais")
 * @ORM\Entity(repositoryClass="AppliFraisBundle\Repository\Fiche_FraisRepository")
 */
class Fiche_Frais
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
     * @var int
     *
     * @ORM\Column(name="utilisateur_id", type="integer")
     */
    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="Fiche_Frais")
     * @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
     */
    private $utilisateurId;

    /**
     * @var int
     *
     * @ORM\Column(name="etat_id", type="integer")
     */
    /**
     * @ORM\ManyToOne(targetEntity="Etat", inversedBy="Fiche_Frais")
     * @ORM\JoinColumn(name="etat_id", referencedColumnName="id")
     */
    private $etatId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=255)
     */
    private $mois;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=255)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="fraisForfait", type="string", length=255)
     */
    /**
     * @ORM\ManyToOne(targetEntity="Frais_Forfait", inversedBy="Fiche_Frais")
     * @ORM\JoinColumn(name="fraisForfait", referencedColumnName="id")
     */
    private $fraisForfait;

    /**
     * @var string
     *
     * @ORM\Column(name="raisHorsForfait", type="string", length=255)
     */
    /**
     * @ORM\ManyToOne(targetEntity="Frais_Hors_Forfait", inversedBy="Fiche_Frais")
     * @ORM\JoinColumn(name="fraisHorsForfait", referencedColumnName="id")
     */
    private $fraisHorsForfait;


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
     * Set utilisateurId
     *
     * @param integer $utilisateurId
     *
     * @return Fiche_Frais
     */
    public function setUtilisateurId($utilisateurId)
    {
        $this->utilisateurId = $utilisateurId;

        return $this;
    }

    /**
     * Get utilisateurId
     *
     * @return int
     */
    public function getUtilisateurId()
    {
        return $this->utilisateurId;
    }

    /**
     * Set etatId
     *
     * @param integer $etatId
     *
     * @return Fiche_Frais
     */
    public function setEtatId($etatId)
    {
        $this->etatId = $etatId;

        return $this;
    }

    /**
     * Get etatId
     *
     * @return int
     */
    public function getEtatId()
    {
        return $this->etatId;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Fiche_Frais
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set mois
     *
     * @param string $mois
     *
     * @return Fiche_Frais
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return string
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return Fiche_Frais
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set fraisForfait
     *
     * @param string $fraisForfait
     *
     * @return Fiche_Frais
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

    /**
     * Set fraisHorsForfait
     *
     * @param string $fraisHorsForfait
     *
     * @return Fiche_Frais
     */
    public function setFraisHorsForfait($fraisHorsForfait)
    {
        $this->fraisHorsForfait = $fraisHorsForfait;

        return $this;
    }

    /**
     * Get fraisHorsForfait
     *
     * @return string
     */
    public function getFraisHorsForfait()
    {
        return $this->fraisHorsForfait;
    }
}

