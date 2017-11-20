<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * abonnement
 *
 * @ORM\Table(name="abonnement")
 * @ORM\Entity()
 */
class abonnement
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
     * @ORM\Column(name="dateAbonnement", type="string", length=255)
     */
    private $dateAbonnement;


    /**
     *
     *
     * @ORM\ManyToOne (targetEntity="User")
     * @ORM\JoinColumn (name="client",referencedColumnName="id",onDelete="CASCADE")
     */
    private $client;
    
    /**
     *
     *
     * @ORM\ManyToOne (targetEntity="Boutiques")
     * @ORM\JoinColumn (name="boutique",referencedColumnName="id",onDelete="CASCADE")
     */
    private $boutique;
    
    

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
     * Set dateAbonnement
     *
     * @param string $dateAbonnement
     *
     * @return abonnement
     */
    public function setDateAbonnement($dateAbonnement)
    {
        $this->dateAbonnement = $dateAbonnement;

        return $this;
    }

    /**
     * Get dateAbonnement
     *
     * @return string
     */
    public function getDateAbonnement()
    {
        return $this->dateAbonnement;
    }

    /**
     * Set client
     *
     * @param \MyApp\UserBundle\Entity\User $client
     *
     * @return abonnement
     */
    public function setClient(\MyApp\UserBundle\Entity\User $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \MyApp\UserBundle\Entity\User
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set boutique
     *
     * @param \MyApp\UserBundle\Entity\Boutiques $boutique
     *
     * @return abonnement
     */
    public function setBoutique(\MyApp\UserBundle\Entity\Boutiques $boutique = null)
    {
        $this->boutique = $boutique;

        return $this;
    }

    /**
     * Get boutique
     *
     * @return \MyApp\UserBundle\Entity\Boutiques
     */
    public function getBoutique()
    {
        return $this->boutique;
    }
}
