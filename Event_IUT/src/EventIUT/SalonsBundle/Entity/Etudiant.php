<?php

namespace EventIUT\SalonsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EventIUT\SalonsBundle\Entity\EtudiantRepository")
 */
class Etudiant
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
     * @ORM\Column(name="prenom", type="string", length=30)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=15)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="courriel", type="string", length=70)
     */
    private $courriel;

    /**
     * @var string
     *
     * @ORM\Column(name="motDePasse", type="string", length=12)
     */
    private $motDePasse;

    /**
     * @var integer
     *
     * @ORM\Column(name="groupeTD", type="integer")
     */
    private $groupeTD;

    /**
     * @var integer
     *
     * @ORM\Column(name="groupeTP", type="integer")
     */
    private $groupeTP;

    /**
     *
     * @ORM\ManyToMany(targetEntity="EventIUT\SalonsBundle\Entity\Formations")
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->formations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add formations
     *
     * @param \EventIUT\SalonsBundle\Entity\Formations $formations
     * @return Etudiant
     */
    public function addFormation(\EventIUT\SalonsBundle\Entity\Formations $formations)
    {
        $this->formations[] = $formations;

        return $this;
    }

    /**
     * Remove formations
     *
     * @param \EventIUT\SalonsBundle\Entity\Formations $formations
     */
    public function removeFormation(\EventIUT\SalonsBundle\Entity\Formations $formations)
    {
        $this->formations->removeElement($formations);
    }

    /**
     * Get formations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFormations()
    {
        return $this->formations;
    }
}
