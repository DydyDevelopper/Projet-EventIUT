<?php

namespace EventIUT\SalonsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salon
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EventIUT\SalonsBundle\Entity\SalonRepository")
 */
class Salon
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
     * @ORM\Column(name="nom", type="string", length=30)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="complement", type="string", length=255)
     */
    private $complement;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostal", type="integer")
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="acces", type="text")
     */
    private $acces;

    /**
     * @var string
     *
     * @ORM\Column(name="bilan", type="text")
     */
    private $bilan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLimite", type="datetime")
     */
    private $dateLimite;

    /**
     *
     * @ORM\ManyToMany(targetEntity="EventIUT\SalonsBundle\Entity\DateSalon")
     */
    private $datesSalon;

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
     * @return Salon
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
     * Set adresse
     *
     * @param string $adresse
     * @return Salon
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
     * Set complement
     *
     * @param string $complement
     * @return Salon
     */
    public function setComplement($complement)
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * Get complement
     *
     * @return string 
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Salon
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     * @return Salon
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return integer 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Salon
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set acces
     *
     * @param string $acces
     * @return Salon
     */
    public function setAcces($acces)
    {
        $this->acces = $acces;

        return $this;
    }

    /**
     * Get acces
     *
     * @return string 
     */
    public function getAcces()
    {
        return $this->acces;
    }

    /**
     * Set bilan
     *
     * @param string $bilan
     * @return Salon
     */
    public function setBilan($bilan)
    {
        $this->bilan = $bilan;

        return $this;
    }

    /**
     * Get bilan
     *
     * @return string 
     */
    public function getBilan()
    {
        return $this->bilan;
    }

    /**
     * Set dateLimite
     *
     * @param \DateTime $dateLimite
     * @return Salon
     */
    public function setDateLimite($dateLimite)
    {
        $this->dateLimite = $dateLimite;

        return $this;
    }

    /**
     * Get dateLimite
     *
     * @return \DateTime 
     */
    public function getDateLimite()
    {
        return $this->dateLimite;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->datesSalon = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add datesSalon
     *
     * @param \EventIUT\SalonsBundle\Entity\DateSalon $datesSalon
     * @return Salon
     */
    public function addDatesSalon(\EventIUT\SalonsBundle\Entity\DateSalon $datesSalon)
    {
        $this->datesSalon[] = $datesSalon;

        return $this;
    }

    /**
     * Remove datesSalon
     *
     * @param \EventIUT\SalonsBundle\Entity\DateSalon $datesSalon
     */
    public function removeDatesSalon(\EventIUT\SalonsBundle\Entity\DateSalon $datesSalon)
    {
        $this->datesSalon->removeElement($datesSalon);
    }

    /**
     * Get datesSalon
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDatesSalon()
    {
        return $this->datesSalon;
    }
}
