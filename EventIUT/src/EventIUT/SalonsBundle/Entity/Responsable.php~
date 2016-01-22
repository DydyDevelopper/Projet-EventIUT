<?php

namespace EventIUT\SalonsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsable
 */
class Responsable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $courriel;

    /**
     * @var string
     */
    private $motDePasse;

    /**
     * @ORM\ManyToMany(targetEntity="EventIUT\SalonsBundle\Entity\Formation")
     */
    private $formations;
	
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
     * @return Responsable
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
     * @return Responsable
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
     * Set login
     *
     * @param string $login
     * @return Responsable
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set courriel
     *
     * @param string $courriel
     * @return Responsable
     */
    public function setCourriel($courriel)
    {
        $this->courriel = $courriel;

        return $this;
    }

    /**
     * Get courriel
     *
     * @return string 
     */
    public function getCourriel()
    {
        return $this->courriel;
    }

    /**
     * Set motDePasse
     *
     * @param string $motDePasse
     * @return Responsable
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    /**
     * Get motDePasse
     *
     * @return string 
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }
}
