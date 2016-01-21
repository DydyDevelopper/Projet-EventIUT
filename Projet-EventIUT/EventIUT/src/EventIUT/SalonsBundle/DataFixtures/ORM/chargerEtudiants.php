 <?php

 // src/EventIUT/SalonsBundle/DataFixtures/ORM/chargerEtudiants.php

namespace EventIUT\SalonsBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EventIUT\SalonsBundle\Entity\Formation;
use EventIUT\SalonsBundle\Entity\Etudiant;

class Etudiants implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		// Creation de l'etudiant 01
		$etudiant01 = new Etudiant;
        $etudiant01->setNom(/* A completer */);
        $etudiant01->setPrenom(/* A completer */);
        $etudiant01->setLogin(/* A completer */);
        $etudiant01->setMotDePasse(/* A commpleter */);
        $etudiant01->setGroupeTD(/* A completer */);
        $etudiant01->setGroupeTP(/* A completer */);
        $etudiant01->getFormation(/* A compelter */);

        // On rend les etudiants persistant 
		$manager->persist($etudiant01);

        // On déclenche l'enregistrement de toutes les formations en BD
        $manager->flush();
    }
}