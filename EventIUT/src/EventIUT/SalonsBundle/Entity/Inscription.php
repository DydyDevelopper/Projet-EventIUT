<?php

namespace EventIUT\SalonsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscription
 */
class Inscription
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $valider;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="EventIUT\SalonsBundle\Entity\Salon")
     */
    private $salon;

    /**
     * @ORM\ManyToOne(targetEntity="EventIUT\SalonsBundle\Entity\Responsable")
     */
    private $responsable;

    /**
     * @ORM\ManyToOne(targetEntity="EventIUT\SalonsBundle\Entity\Etudiant")
     */
    private $etudiant;

    /**
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
     * @param boolean $valider
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
     * @return boolean 
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
}
