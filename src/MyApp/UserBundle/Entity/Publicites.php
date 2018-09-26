<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publicites
 *
 * @ORM\Table(name="publicites")
 * @ORM\Entity(repositoryClass="MyApp\UserBundle\Repository\PublicitesRepository")
 */
class Publicites
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
     * @ORM\Column(name="descriptionPub", type="string", length=255)
     */
    private $descriptionPub;

    /**
     * @var string
     *
     * @ORM\Column(name="dateDebutPub", type="string", length=255)
     */
    private $dateDebutPub;

    /**
     * @var string
     *
     * @ORM\Column(name="dateFinPub", type="string", length=255)
     */
    private $dateFinPub;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob")
     */
    private $image;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descriptionPub
     *
     * @param string $descriptionPub
     *
     * @return Publicites
     */
    public function setDescriptionPub($descriptionPub)
    {
        $this->descriptionPub = $descriptionPub;

        return $this;
    }

    /**
     * Get descriptionPub
     *
     * @return string
     */
    public function getDescriptionPub()
    {
        return $this->descriptionPub;
    }

    /**
     * Set dateDebutPub
     *
     * @param string $dateDebutPub
     *
     * @return Publicites
     */
    public function setDateDebutPub($dateDebutPub)
    {
        $this->dateDebutPub = $dateDebutPub;

        return $this;
    }

    /**
     * Get dateDebutPub
     *
     * @return string
     */
    public function getDateDebutPub()
    {
        return $this->dateDebutPub;
    }

    /**
     * Set dateFinPub
     *
     * @param string $dateFinPub
     *
     * @return Publicites
     */
    public function setDateFinPub($dateFinPub)
    {
        $this->dateFinPub = $dateFinPub;

        return $this;
    }

    /**
     * Get dateFinPub
     *
     * @return string
     */
    public function getDateFinPub()
    {
        return $this->dateFinPub;
    }
}

