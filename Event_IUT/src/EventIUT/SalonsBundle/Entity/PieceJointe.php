<?php

namespace EventIUT\SalonsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PieceJointe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EventIUT\SalonsBundle\Entity\PieceJointeRepository")
 */
class PieceJointe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer")
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=5)
     */
    private $extension;

    /**
     *
     * @ORM\ManyToOne(targetEntity="EventIUT\SalonsBundle\Entity\Salon")
     */

    private $salon;
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
     * Set nom
     *
     * @param string $nom
     * @return PieceJointe
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
     * Set taille
     *
     * @param integer $taille
     * @return PieceJointe
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return integer 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return PieceJointe
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set salon
     *
     * @param \EventIUT\SalonsBundle\Entity\Salon $salon
     * @return PieceJointe
     */
    public function setSalon(\EventIUT\SalonsBundle\Entity\Salon $salon = null)
    {
        $this->salon = $salon;

        return $this;
    }

    /**
     * Get salon
     *
     * @return \EventIUT\SalonsBundle\Entity\Salon 
     */
    public function getSalon()
    {
        return $this->salon;
    }
}
