<?php

namespace AppliFraisBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="AppliFraisBundle\Repository\UtilisateurRepository")
 */
class Utilisateur extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="adressePostal", type="string", length=255)
     */
    private $adressePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=255)
     */
    private $codePostal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEmbauche", type="date")
     */
    private $dateEmbauche;

    /**
     * @ORM\OneToMany(targetEntity="Fiche_Frais", mappedBy="Utilisateur")
     */
    private $ficheFrais;


    public function __construct()
    {
        parent::__construct();
        $this->ficheFrais = new ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateur
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Utilisateur
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set adressePostal
     *
     * @param string $adressePostal
     *
     * @return Utilisateur
     */
    public function setAdressePostal($adressePostal)
    {
        $this->adressePostal = $adressePostal;

        return $this;
    }

    /**
     * Get adressePostal
     *
     * @return string
     */
    public function getAdressePostal()
    {
        return $this->adressePostal;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return Utilisateur
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set dateEmbauche
     *
     * @param \DateTime $dateEmbauche
     *
     * @return Utilisateur
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get dateEmbauche
     *
     * @return \DateTime
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Add ficheFrai
     *
     * @param \AppliFraisBundle\Entity\Fiche_Frais $ficheFrai
     *
     * @return Utilisateur
     */
    public function addFicheFrai(\AppliFraisBundle\Entity\Fiche_Frais $ficheFrai)
    {
        $this->ficheFrais[] = $ficheFrai;

        return $this;
    }

    /**
     * Remove ficheFrai
     *
     * @param \AppliFraisBundle\Entity\Fiche_Frais $ficheFrai
     */
    public function removeFicheFrai(\AppliFraisBundle\Entity\Fiche_Frais $ficheFrai)
    {
        $this->ficheFrais->removeElement($ficheFrai);
    }

    /**
     * Get ficheFrais
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFicheFrais()
    {
        return $this->ficheFrais;
    }
}
