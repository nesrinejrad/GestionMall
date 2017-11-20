<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="MyApp\UserBundle\Repository\CategorieRepository")
 */
class Categorie
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
     * @ORM\Column(name="libele", type="string", length=45)
     */
    private $libele;
    
    /**
     * @ORM\OneToMany(targetEntity="Boutiques", mappedBy="categorie")
     */
    private $boutiques;


    public function __construct()
    {
        $this->boutiques = new ArrayCollection();
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
     * Set libele
     *
     * @param string $libele
     *
     * @return Categorie
     */
    public function setLibele($libele)
    {
        $this->libele = $libele;

        return $this;
    }

    /**
     * Get libele
     *
     * @return string
     */
    public function getLibele()
    {
        return $this->libele;
    }

    /**
     * Add boutique
     *
     * @param \MyApp\UserBundle\Entity\Boutiques $boutique
     *
     * @return Categorie
     */
    public function addBoutique(\MyApp\UserBundle\Entity\Boutiques $boutique)
    {
        $this->boutiques[] = $boutique;

        return $this;
    }

    /**
     * Remove boutique
     *
     * @param \MyApp\UserBundle\Entity\Boutiques $boutique
     */
    public function removeBoutique(\MyApp\UserBundle\Entity\Boutiques $boutique)
    {
        $this->boutiques->removeElement($boutique);
    }

    /**
     * Get boutiques
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBoutiques()
    {
        return $this->boutiques;
    }
    
    public function __toString() {
        return $this->libele;
    }
}
