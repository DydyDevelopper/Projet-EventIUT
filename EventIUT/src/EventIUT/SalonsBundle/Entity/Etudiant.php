<?php

namespace EventIUT\SalonsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 */
class Etudiant
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
     * @var integer
     */
    private $groupeTD;

    /**
     * @var integer
     */
    private $groupeTP;

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
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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

    /**
     * Set groupeTD
     *
     * @param integer $groupeTD
     * @return Etudiant
     */
    public function setGroupeTD($groupeTD)
    {
        $this->groupeTD = $groupeTD;

        return $this;
    }

    /**
     * Get groupeTD
     *
     * @return integer 
     */
    public function getGroupeTD()
    {
        return $this->groupeTD;
    }

    /**
     * Set groupeTP
     *
     * @param integer $groupeTP
     * @return Etudiant
     */
    public function setGroupeTP($groupeTP)
    {
        $this->groupeTP = $groupeTP;

        return $this;
    }

    /**
     * Get groupeTP
     *
     * @return integer 
     */
    public function getGroupeTP()
    {
        return $this->groupeTP;
    }
}
