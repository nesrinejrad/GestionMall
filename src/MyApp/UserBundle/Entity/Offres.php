<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offres
 *
 * @ORM\Table(name="offres")
 * @ORM\Entity(repositoryClass="MyApp\UserBundle\Repository\OffresRepository")
 */
class Offres
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
     * @ORM\Column(name="dateDebutOffre", type="string", length=255)
     */
    private $dateDebutOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="dateFinOffre", type="string", length=255)
     */
    private $dateFinOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionOffre", type="string", length=255)
     */
    private $descriptionOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="categorieOffre", type="string", length=255)
     */
    private $categorieOffre;

    /**
     * @var int
     *
     * @ORM\Column(name="valeur", type="integer")
     */
    private $valeur;

    /**
     * @ORM\ManyToOne (targetEntity="Boutiques")
     * @ORM\JoinColumn (name="idBoutique",referencedColumnName="id",onDelete="CASCADE")
     */

    private $idBoutique;

    /**
     * @return mixed
     */
    public function getIdBoutique()
    {
        return $this->idBoutique;
    }

    /**
     * @param mixed $idBoutique
     */
    public function setIdBoutique($idBoutique)
    {
        $this->idBoutique = $idBoutique;
    }




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
     * Set dateDebutOffre
     *
     * @param string $dateDebutOffre
     *
     * @return Offres
     */
    public function setDateDebutOffre($dateDebutOffre)
    {
        $this->dateDebutOffre = $dateDebutOffre;

        return $this;
    }

    /**
     * Get dateDebutOffre
     *
     * @return string
     */
    public function getDateDebutOffre()
    {
        return $this->dateDebutOffre;
    }

    /**
     * Set dateFinOffre
     *
     * @param string $dateFinOffre
     *
     * @return Offres
     */
    public function setDateFinOffre($dateFinOffre)
    {
        $this->dateFinOffre = $dateFinOffre;

        return $this;
    }

    /**
     * Get dateFinOffre
     *
     * @return string
     */
    public function getDateFinOffre()
    {
        return $this->dateFinOffre;
    }

    /**
     * Set descriptionOffre
     *
     * @param string $descriptionOffre
     *
     * @return Offres
     */
    public function setDescriptionOffre($descriptionOffre)
    {
        $this->descriptionOffre = $descriptionOffre;

        return $this;
    }

    /**
     * Get descriptionOffre
     *
     * @return string
     */
    public function getDescriptionOffre()
    {
        return $this->descriptionOffre;
    }

    /**
     * Set categorieOffre
     *
     * @param string $categorieOffre
     *
     * @return Offres
     */
    public function setCategorieOffre($categorieOffre)
    {
        $this->categorieOffre = $categorieOffre;

        return $this;
    }

    /**
     * Get categorieOffre
     *
     * @return string
     */
    public function getCategorieOffre()
    {
        return $this->categorieOffre;
    }

    /**
     * Set valeur
     *
     * @param integer $valeur
     *
     * @return Offres
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return int
     */
    public function getValeur()
    {
        return $this->valeur;
    }
}

