<?php
/**
 * Created by PhpStorm.
 * User: WaSs
 * Date: 09/11/2017
 * Time: 20:25
 */

namespace MyApp\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser; use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class User extends BaseUser {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    protected $id;

    /**
     * @ORM\Column(type="string",length=255)
     *
     */
    private $nom;

    /**
     * @ORM\Column(type="string",length=255)
     *
     */
    private $prenom;
    
    /**
     * @ORM\Column(type="string",length=45)
     *
     */
    private $tel;
    
    /**
     * @ORM\Column(type="string",length=255)
     *
     */
    private $adresse;
    
    /**
     * @ORM\OneToMany(targetEntity="carteFidelites", mappedBy="client")
     */
    private $cartes;
    
    /**
     * @ORM\OneToMany(targetEntity="abonnement", mappedBy="client")
     */
    private $abonnements;


    /**
     * @ORM\OneToOne(targetEntity="Invitation")
     * @ORM\JoinColumn(referencedColumnName="code")
     * @Assert\NotNull(message="Your invitation is wrong", groups={"Registration"})
     */
    protected $invitation;
    
    /**
     * @var \Boutiques
     *
     * @ORM\OneToOne(targetEntity="Boutiques", inversedBy="responsable" , cascade={"all"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="responsable_id", referencedColumnName="id")
     * })
     */
    private $boutique;



    public function __construct()
     {
        parent::__construct();         // your own logic
     }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }



    
    /**
     * Set invitation
     *
     * @param \MyApp\UserBundle\Entity\Invitation $invitation
     *
     * @return User
     */
    public function setInvitation(\MyApp\UserBundle\Entity\Invitation $invitation = null)
    {
        $this->invitation = $invitation;

        return $this;
    }

    /**
     * Get invitation
     *
     * @return \MyApp\UserBundle\Entity\Invitation
     */
    public function getInvitation()
    {
        return $this->invitation;
    }

    /**
     * Set boutique
     *
     * @param \MyApp\UserBundle\Entity\Boutiques $boutique
     *
     * @return User
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

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Add carte
     *
     * @param \MyApp\UserBundle\Entity\carteFidelites $carte
     *
     * @return User
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
     * Add abonnement
     *
     * @param \MyApp\UserBundle\Entity\abonnement $abonnement
     *
     * @return User
     */
    public function addAbonnement(\MyApp\UserBundle\Entity\abonnement $abonnement)
    {
        $this->abonnements[] = $abonnement;

        return $this;
    }

    /**
     * Remove abonnement
     *
     * @param \MyApp\UserBundle\Entity\abonnement $abonnement
     */
    public function removeAbonnement(\MyApp\UserBundle\Entity\abonnement $abonnement)
    {
        $this->abonnements->removeElement($abonnement);
    }

    /**
     * Get abonnements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAbonnements()
    {
        return $this->abonnements;
    }
}
