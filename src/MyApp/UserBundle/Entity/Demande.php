<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */
class Demande
{
    /** @ORM\Id @ORM\Column(type="string", length=6) */
    protected $id;

    /** @ORM\Column(type="string", length=256) */
    protected $nom;
    
    /** @ORM\Column(type="string", length=256) */
    protected $prenom;
    
    /** @ORM\Column(type="string", length=256) */
    protected $email;
    
    /** @ORM\Column(type="string", length=256) */
    protected $telephone;
    
    /**
     * @var integer
     * 
     * @ORM\Column(name="etat", type="integer", length=45, nullable=true)
     */
    private $etat;

    public function __construct()
    {
        // generate identifier only once, here a 6 characters length code
        $this->id = substr(md5(uniqid(rand(), true)), 0, 6);
        $this->etat = 0;
    }
    

    /**
     * Set id
     *
     * @param string $id
     * @return Demande
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Demande
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
     * @return Demande
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
     * Set email
     *
     * @param string $email
     * @return Demande
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Demande
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
    
    /**
     * Set etat
     *
     * @param integer $etat
     * @return Demande
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
