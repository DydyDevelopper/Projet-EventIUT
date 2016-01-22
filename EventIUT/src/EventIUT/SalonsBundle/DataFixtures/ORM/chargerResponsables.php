<?php

 // src/EventIUT/SalonsBundle/DataFixtures/ORM/chargerResponsables.php

namespace EventIUT\SalonsBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EventIUT\SalonsBundle\Entity\Formation;
use EventIUT\SalonsBundle\Entity\Responsable;

class Responsables implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		// Creation du responsable
		$responsableMarqua = new Responsable;
        $responsableMarqua->setNom(/* A completer */);
        $responsableMarqua->setPrenom(/* A completer */);
        $responsableMarqua->setLogin(/* A completer */);
        $responsableMarqua->setMotDePasse(/* A commpleter */);
        $responsableMarqua->getFormation(/* A compelter */);

        // On rend les enseignants persistant 
		$manager->persist($responsableMarqua);

        // On déclenche l'enregistrement de toutes les formations en BD
        $manager->flush();
    }
}