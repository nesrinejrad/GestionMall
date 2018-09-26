<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boutiques
 *
 * @ORM\Table(name="boutiques")
 * @ORM\Entity(repositoryClass="MyApp\UserBundle\Repository\BoutiquesRepository")
 */
class Boutiques
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
     * @ORM\Column(name="nomBoutiques", type="string", length=255)
     */
    private $nomBoutique;

    /**
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="boutiques")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    private $categorie;
    
    /**
     * @ORM\OneToMany(targetEntity="carteFidelites", mappedBy="boutique")
     */
    private $cartes;
    
    /**
     * @ORM\OneToMany(targetEntity="abonnement", mappedBy="boutique")
     */
    private $abonnees;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionBoutique", type="string", length=255)
     */
    private $descriptionBoutique;


    /**
     * @var User
     * 
     * @ORM\OneToOne(targetEntity="User", mappedBy="boutique" , cascade={"all"})
     */
    private $responsable;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categorieBoutique
     *
     * @param string $categorieBoutique
     *
     * @return Boutiques
     */
    public function setCategorieBoutique($categorieBoutique)
    {
        $this->categorieBoutique = $categorieBoutique;

        return $this;
    }

    /**
     * Get categorieBoutique
     *
     * @return string
     */
    public function getCategorieBoutique()
    {
        return $this->categorie;
    }

    /**
     * Set descriptionBoutique
     *
     * @param string $descriptionBoutique
     *
     * @return Boutiques
     */
    public function setDescriptionBoutique($descriptionBoutique)
    {
        $this->descriptionBoutique = $descriptionBoutique;

        return $this;
    }

    /**
     * Get descriptionBoutique
     *
     * @return string
     */
    public function getDescriptionBoutique()
    {
        return $this->descriptionBoutique;
    }

    /**
     * Set responsable
     *
     * @param \MyApp\UserBundle\Entity\User $responsable
     *
     * @return Boutiques
     */
    public function setResponsable(\MyApp\UserBundle\Entity\User $responsable = null)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return \MyApp\UserBundle\Entity\User
     */
    public function getResponsable()
    {
        return $this->responsable;
    }
    
    public function __toString() {
        return $this->nomBoutique;
    }

    public function getNom() {
        return $this->nomBoutique;
    }

    /**
     * Set nomBoutique
     *
     * @param string $nomBoutique
     *
     * @return Boutiques
     */
    public function setNomBoutique($nomBoutique)
    {
        $this->nomBoutique = $nomBoutique;

        return $this;
    }

    /**
     * Get nomBoutique
     *
     * @return string
     */
    public function getNomBoutique()
    {
        return $this->nomBoutique;
    }

    /**
     * Set categorie
     *
     * @param \MyApp\UserBundle\Entity\Categorie $categorie
     *
     * @return Boutiques
     */
    public function setCategorie(\MyApp\UserBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \MyApp\UserBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cartes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add carte
     *
     * @param \MyApp\UserBundle\Entity\carteFidelites $carte
     *
     * @return Boutiques
     */
    public function addCarte(\MyApp\UserBundle\Entity\carteFidelites $carte)
    {
        $this->cartes[] = $carte;

        return $this;
    }

    /**
     * Remove carte
     *
     * @param \MyApp\UserBundle\Entity\carteFidelites $carte
     */
    public function removeCarte(\MyApp\UserBundle\Entity\carteFidelites $carte)
    {
        $this->cartes->removeElement($carte);
    }

    /**
     * Get cartes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCartes()
    {
        return $this->cartes;
    }
    
    

    /**
     * Add abonnee
     *
     * @param \MyApp\UserBundle\Entity\abonnement $abonnee
     *
     * @return Boutiques
     */
    public function addAbonnee(\MyApp\UserBundle\Entity\abonnement $abonnee)
    {
        $this->abonnees[] = $abonnee;

        return $this;
    }

    /**
     * Remove abonnee
     *
     * @param \MyApp\UserBundle\Entity\abonnement $abonnee
     */
    public function removeAbonnee(\MyApp\UserBundle\Entity\abonnement $abonnee)
    {
        $this->abonnees->removeElement($abonnee);
    }

    /**
     * Get abonnees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAbonnees()
    {
        return $this->abonnees;
    }
}
