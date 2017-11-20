<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraisons
 *
 * @ORM\Table(name="livraisons")
 * @ORM\Entity(repositoryClass="MyApp\UserBundle\Repository\LivraisonsRepository")
 */
class Livraisons
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
     * @var float
     *
     * @ORM\Column(name="soldeLivraison", type="float")
     */
    private $soldeLivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrPassage", type="integer")
     */
    private $nbrPassage;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set soldeLivraison
     *
     * @param float $soldeLivraison
     *
     * @return Livraisons
     */
    public function setSoldeLivraison($soldeLivraison)
    {
        $this->soldeLivraison = $soldeLivraison;

        return $this;
    }

    /**
     * Get soldeLivraison
     *
     * @return float
     */
    public function getSoldeLivraison()
    {
        return $this->soldeLivraison;
    }

    /**
     * Set nbrPassage
     *
     * @param integer $nbrPassage
     *
     * @return Livraisons
     */
    public function setNbrPassage($nbrPassage)
    {
        $this->nbrPassage = $nbrPassage;

        return $this;
    }

    /**
     * Get nbrPassage
     *
     * @return int
     */
    public function getNbrPassage()
    {
        return $this->nbrPassage;
    }
}

