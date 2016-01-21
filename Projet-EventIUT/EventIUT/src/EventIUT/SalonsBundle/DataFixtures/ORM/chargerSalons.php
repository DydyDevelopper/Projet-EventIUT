<?php

 // src/EventIUT/SalonsBundle/DataFixtures/ORM/chargerSalons.php

namespace EventIUT\SalonsBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EventIUT\SalonsBundle\Entity\Inscription;
use EventIUT\SalonsBundle\Entity\Salon;

class Salons implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		// Creation du salon
        $salon01= new Salon;
        $salon01->setNom("");
        $salon01->setAdresse("");
        $salon01->setComplement("");
        $salon01->setVille("");
        $salon01->setCodePostal();
        $salon01->setDescription("");
        $salon01->setAcces("");
        $salon01->setBilan("");
        $salon01->setDate(new \DateTime('AAAA//MM/JJ'));
        $salon01->getDateSalon($);

        // On rend les salons persistantes
		$manager->persist($salon01);

        // On déclenche l'enregistrement de toutes les formations en BD
        $manager->flush();
    }
}