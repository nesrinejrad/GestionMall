<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achats
 *
 * @ORM\Table(name="achats")
 * @ORM\Entity(repositoryClass="MyApp\UserBundle\Repository\AchatsRepository")
 */
class Achats
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
     * @ORM\Column(name="idProduit", type="integer")
     */
    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="nomProduit", type="string", length=255)
     */
    private $nomProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="categorieProduit", type="string", length=255)
     */
    private $categorieProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="prixUnitair", type="float")
     */
    private $prixUnitair;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;


    /**
     *
     *
     * @ORM\ManyToOne (targetEntity="User")
     * @ORM\JoinColumn (name="idClient",referencedColumnName="id",onDelete="CASCADE")
     */

    private $idClient;

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }



    /**
     * @return float
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param float $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
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
     * Set idProduit
     *
     * @param integer $idProduit
     *
     * @return Achats
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set nomProduit
     *
     * @param string $nomProduit
     *
     * @return Achats
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Get nomProduit
     *
     * @return string
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * Set categorieProduit
     *
     * @param string $categorieProduit
     *
     * @return Achats
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
     * Set prixUnitair
     *
     * @param float $prixUnitair
     *
     * @return Achats
     */
    public function setPrixUnitair($prixUnitair)
    {
        $this->prixUnitair = $prixUnitair;

        return $this;
    }

    /**
     * Get prixUnitair
     *
     * @return float
     */
    public function getPrixUnitair()
    {
        return $this->prixUnitair;
    }
}

