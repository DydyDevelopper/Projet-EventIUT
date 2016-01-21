 <?php

 // src/EventIUT/SalonsBundle/DataFixtures/ORM/chargerEnseignants.php

namespace EventIUT\SalonsBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EventIUT\SalonsBundle\Entity\Formation;
use EventIUT\SalonsBundle\Entity\Enseignant;

class Enseignants implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		// Creation de l'enseignant Marquesuzaa
        $enseignantMarquesuzaa = new Enseignant;
        $enseignantMarquesuzaa->setNom("Marquesuzaa");
        $enseignantMarquesuzaa->setPrenom("Christophe");
        $enseignantMarquesuzaa->setLogin(/* A completer... */);
        $enseignantMarquesuzaa->setCourriel(/* A completer */);
        $enseignantMarquesuzaa->setMotDePasse(/* A completer */);
        $enseignantMarquesuzaa->getFormation(/* A completer */ );

        // On rend les enseignants persistant 
		$manager->persist($enseignantMarquesuzaa);

        // On déclenche l'enregistrement de toutes les formations en BD
        $manager->flush();
	}
}