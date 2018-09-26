<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="produits")
 * @ORM\Entity(repositoryClass="MyApp\UserBundle\Repository\ProduitsRepository")
 */
class Produits
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
     * @ORM\Column(name="descriptionProduit", type="string", length=255)
     */
    private $descriptionProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="categorieProduit", type="string", length=255)
     */
    private $categorieProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="prixProduit", type="float")
     */
    private $prixProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="stockProduit", type="integer")
     */
    private $stockProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="taille", type="integer", nullable=true)
     */
    private $taille;

    /**
     * @var float
     *
     * @ORM\Column(name="pointure", type="float", nullable=true)
     */
    private $pointure;

    /**
     * @var string
     *
     * @ORM\Column(name="materiaux", type="string", length=255, nullable=true)
     */
    private $materiaux;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=false)
     */
    private $image;


    /**
     *
     *
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
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
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
     * Set descriptionProduit
     *
     * @param string $descriptionProduit
     *
     * @return Produits
     */
    public function setDescriptionProduit($descriptionProduit)
    {
        $this->descriptionProduit = $descriptionProduit;

        return $this;
    }

    /**
     * Get descriptionProduit
     *
     * @return string
     */
    public function getDescriptionProduit()
    {
        return $this->descriptionProduit;
    }

    /**
     * Set categorieProduit
     *
     * @param string $categorieProduit
     *
     * @return Produits
     */
    public function setCategorieProduit($categorieProduit)
    {
        $this->categorieProduit = $categorieProduit;

        return $this;
    }

    /**
     * Get categorieProduit
     *
     * @return string
     */
    public function getCategorieProduit()
    {
        return $this->categorieProduit;
    }

    /**
     * Set prixProduit
     *
     * @param float $prixProduit
     *
     * @return Produits
     */
    public function setPrixProduit($prixProduit)
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }

    /**
     * Get prixProduit
     *
     * @return float
     */
    public function getPrixProduit()
    {
        return $this->prixProduit;
    }

    /**
     * Set stockProduit
     *
     * @param integer $stockProduit
     *
     * @return Produits
     */
    public function setStockProduit($stockProduit)
    {
        $this->stockProduit = $stockProduit;

        return $this;
    }

    /**
     * Get stockProduit
     *
     * @return int
     */
    public function getStockProduit()
    {
        return $this->stockProduit;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     *
     * @return Produits
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return int
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set pointure
     *
     * @param float $pointure
     *
     * @return Produits
     */
    public function setPointure($pointure)
    {
        $this->pointure = $pointure;

        return $this;
    }

    /**
     * Get pointure
     *
     * @return float
     */
    public function getPointure()
    {
        return $this->pointure;
    }

    /**
     * Set materiaux
     *
     * @param string $materiaux
     *
     * @return Produits
     */
    public function setMateriaux($materiaux)
    {
        $this->materiaux = $materiaux;

        return $this;
    }

    /**
     * Get materiaux
     *
     * @return string
     */
    public function getMateriaux()
    {
        return $this->materiaux;
    }
}

