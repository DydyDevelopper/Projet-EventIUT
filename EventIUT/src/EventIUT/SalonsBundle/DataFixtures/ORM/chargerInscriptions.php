 <?php

 // src/EventIUT/SalonsBundle/DataFixtures/ORM/chargerInscription.php

namespace EventIUT\SalonsBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EventIUT\SalonsBundle\Entity\Inscription;
use EventIUT\SalonsBundle\Entity\Responsable;
use EventIUT\SalonsBundle\Entity\Etudiant;
use EventIUT\SalonsBundle\Entity\Enseignant;

class Inscriptions implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		// Creation de l'inscription
        $inscription01= new Inscription;
        $inscription01->setValider(/* true or false */);
        $inscription01->setDate(new \DateTime('AAAA/MM/JJ'));
        $inscription01->addEnseignant();
        $inscription01->addEtudiant();
        $inscription01->addResponsable();

        // On rend les inscriptions persistantes
		$manager->persist($inscription01);

        // On déclenche l'enregistrement de toutes les formations en BD
        $manager->flush();
    }
}