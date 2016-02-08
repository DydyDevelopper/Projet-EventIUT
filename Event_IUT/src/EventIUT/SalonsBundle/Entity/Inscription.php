<?php

namespace EventIUT\SalonsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscription
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EventIUT\SalonsBundle\Entity\InscriptionRepository")
 */
class Inscription
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
     * @var integer
     *
     * @ORM\Column(name="valider", type="integer")
     */
    private $valider;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     *
     * @ORM\ManyToOne(targetEntity="EventIUT\SalonsBundle\Entity\Salon")
     */
    private $salon;

    /**
     *
     * @ORM\ManyToOne(targetEntity="EventIUT\SalonsBundle\Entity\Responsable")
     */
    private $responsable;

    /**
     *
     * @ORM\ManyToOne(targetEntity="EventIUT\SalonsBundle\Entity\Etudiant")
     */
    private $etudiant;

    /**
     *
     * @ORM\ManyToOne(targetEntity="EventIUT\SalonsBundle\Entity\Enseignant")
     */
    private $enseignant;

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
     * Set valider
     *
     * @param integer $valider
     * @return Inscription
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return integer 
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Inscription
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set salon
     *
     * @param \EventIUT\SalonsBundle\Entity\Salon $salon
     * @return Inscription
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

    /**
     * Set responsable
     *
     * @param \EventIUT\SalonsBundle\Entity\Responsable $responsable
     * @return Inscription
     */
    public function setResponsable(\EventIUT\SalonsBundle\Entity\Responsable $responsable = null)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return \EventIUT\SalonsBundle\Entity\Responsable 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set etudiant
     *
     * @param \EventIUT\SalonsBundle\Entity\Etudiant $etudiant
     * @return Inscription
     */
    public function setEtudiant(\EventIUT\SalonsBundle\Entity\Etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \EventIUT\SalonsBundle\Entity\Etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set enseignant
     *
     * @param \EventIUT\SalonsBundle\Entity\Enseignant $enseignant
     * @return Inscription
     */
    public function setEnseignant(\EventIUT\SalonsBundle\Entity\Enseignant $enseignant = null)
    {
        $this->enseignant = $enseignant;

        return $this;
    }

    /**
     * Get enseignant
     *
     * @return \EventIUT\SalonsBundle\Entity\Enseignant 
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }
}
