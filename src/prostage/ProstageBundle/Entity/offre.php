<?php

namespace prostage\ProstageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * offre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="prostage\ProstageBundle\Entity\offreRepository")
 */
class offre
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
     * @ORM\Column(name="titre", type="string", length=100)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="mission", type="text")
     */
    private $mission;

	/**
     *
     * @ORM\ManyToOne(targetEntity="prostage\prostageBundle\Entity\entreprise")
     */
    private $entreprise; // sans "s" car une offre est proposé par une et une seule entreprise
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30)
     */
    private $email;


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
     * Set titre
     *
     * @param string $titre
     * @return offre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set mission
     *
     * @param string $mission
     * @return offre
     */
    public function setMission($mission)
    {
        $this->mission = $mission;

        return $this;
    }

    /**
     * Get mission
     *
     * @return string 
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return offre
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
     * Set entreprise
     *
     * @param \prostage\prostageBundle\Entity\entreprise $entreprise
     * @return offre
     */
    public function setEntreprise(\prostage\prostageBundle\Entity\entreprise $entreprise = null)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return \prostage\prostageBundle\Entity\entreprise 
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }
}
