 <?php

 // src/EventIUT/SalonsBundle/DataFixtures/ORM/chargerFormations.php

namespace EventIUT\SalonsBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EventIUT\SalonsBundle\Entity\Formation;

class Formations implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		// Creation de la Formation DUT Info 
		$formationINFO = new Formation();
		$formationINFO->setLibelle("DUT INFO");

               // Creation de la formation LP COMMERCE
               // Creation de la formation LP ECOLOGIE INDUSTRIELLE
               // Creation de la formation LP EVENEMENTIEL
               // Creation de la formation LP GESTION SALARIAL
               // Creation de la formation LP MULTIMEDIA

               // On rend les formations persistante
               $manager->persist($formationINFO);
               $manager->persist($formationGEA);
               $manager->persist($formationGIM);
               $manager->persist($formationTC);
               $manager->persist($formationLPBANQUE);

               // On déclenche l'enregistrement de toutes les formations en BD
               $manager->flush();

	}
}
