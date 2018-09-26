<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamations
 *
 * @ORM\Table(name="reclamations")
 * @ORM\Entity(repositoryClass="MyApp\UserBundle\Repository\ReclamationsRepository")
 */
class Reclamations
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
     * @ORM\Column(name="titreRec", type="string", length=255)
     */
    private $titreRec;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionRec", type="string", length=255)
     */
    private $descriptionRec;

    /**
     * @var string
     *
     * @ORM\Column(name="etatRec", type="string", length=255)
     */
    private $etatRec;

    /**
     *
     *
     * @ORM\ManyToOne (targetEntity="User")
     * @ORM\JoinColumn (name="idClient",referencedColumnName="id",onDelete="CASCADE")
     */

    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="emailRec", type="string", length=255)
     */
    private $emailRec;

    /**
     * @return string
     */
    public function getEmailRec()
    {
        return $this->emailRec;
    }

    /**
     * @param string $emailRec
     */
    public function setEmailRec($emailRec)
    {
        $this->emailRec = $emailRec;
    }



    /**
     * Reclamations constructor.
     * @param int $id
     */
    public function __construct()
    {
        $this->etatRec="nonVue";
    }


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
     * Set titreRec
     *
     * @param string $titreRec
     *
     * @return Reclamations
     */
    public function setTitreRec($titreRec)
    {
        $this->titreRec = $titreRec;

        return $this;
    }

    /**
     * Get titreRec
     *
     * @return string
     */
    public function getTitreRec()
    {
        return $this->titreRec;
    }

    /**
     * Set descriptionRec
     *
     * @param string $descriptionRec
     *
     * @return Reclamations
     */
    public function setDescriptionRec($descriptionRec)
    {
        $this->descriptionRec = $descriptionRec;

        return $this;
    }

    /**
     * Get descriptionRec
     *
     * @return string
     */
    public function getDescriptionRec()
    {
        return $this->descriptionRec;
    }

    /**
     * Set etatRec
     *
     * @param string $etatRec
     *
     * @return Reclamations
     */
    public function setEtatRec($etatRec)
    {
        $this->etatRec = $etatRec;

        return $this;
    }

    /**
     * Get etatRec
     *
     * @return string
     */
    public function getEtatRec()
    {
        return $this->etatRec;
    }


}

