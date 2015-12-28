<?php

namespace prostage\ProstageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="prostage\ProstageBundle\Entity\FormationRepository")
 */
class Formation
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
     *
     * @ORM\ManyToMany(targetEntity="prostage\prostageBundle\Entity\offre")
     */
    private $offres; // avec un "s" car une formation peut concerné plusieurs offres

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
     * @return Formation
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
     * Constructor
     */
    public function __construct()
    {
        $this->offres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add offres
     *
     * @param \prostage\prostageBundle\Entity\offre $offres
     * @return Formation
     */
    public function addOffre(\prostage\prostageBundle\Entity\offre $offres)
    {
        $this->offres[] = $offres;

        return $this;
    }

    /**
     * Remove offre
     *
     * @param \prostage\prostageBundle\Entity\offre $offre
     */
    public function removeOffre(\prostage\prostageBundle\Entity\offre $offre)
    {
        $this->offres->removeElement($offre);
    }

    /**
     * Get offres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOffres()
    {
        return $this->offres;
    }
}
