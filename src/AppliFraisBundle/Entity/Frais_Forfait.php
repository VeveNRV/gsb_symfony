<?php

namespace AppliFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frais_Forfait
 *
 * @ORM\Table(name="frais__forfait")
 * @ORM\Entity(repositoryClass="AppliFraisBundle\Repository\Frais_ForfaitRepository")
 */
class Frais_Forfait
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
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="ficheFrais", type="string", length=255)
     */
    /**
     * @ORM\OneToMany(targetEntity="Fiche_Frais", mappedBy="Frais_Forfait")
     */
    private $ficheFrais;

    /**
     * @var string
     *
     * @ORM\Column(name="listeFrais", type="string", length=255)
     */
    /**
     * @ORM\ManyToOne(targetEntity="Liste_Frais", inversedBy="Frais_Forfait")
     * @ORM\JoinColumn(name="listeFrais", referencedColumnName="id")
     */
    private $listeFrais;


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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Frais_Forfait
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set ficheFrais
     *
     * @param string $ficheFrais
     *
     * @return Frais_Forfait
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

    /**
     * Set listeFrais
     *
     * @param string $listeFrais
     *
     * @return Frais_Forfait
     */
    public function setListeFrais($listeFrais)
    {
        $this->listeFrais = $listeFrais;

        return $this;
    }

    /**
     * Get listeFrais
     *
     * @return string
     */
    public function getListeFrais()
    {
        return $this->listeFrais;
    }
}

