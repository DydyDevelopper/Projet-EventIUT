<?php
  // src/EventIUT/SalonsBundle/DataFixtures/ORM/chargerSalons.php
namespace EventIUT\SalonsBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EventIUT\SalonsBundle\Entity\DateSalon;
use EventIUT\SalonsBundle\Entity\Salon;
use EventIUT\SalonsBundle\Entity\Formations;

class LoadSalons implements FixtureInterface

{

    //  Dans l argument de la methode load, l objet $manager est l EntityManager

    public function load(ObjectManager $manager)

    {
    
    
            //  //Creation des formations
        $formationDUTINFO = new Formations();
        $formationDUTINFO->setLibelle("DUT INFO");

        $formationDUTTIC = new Formations();
        $formationDUTTIC->setLibelle("DUT TIC");

        $formationLPSIL = new Formations();
        $formationLPSIL->setLibelle("LP SIL");

         // On persiste les formations
        $manager->persist($formationDUTINFO);
        $manager->persist($formationDUTTIC);
        $manager->persist($formationLPSIL);
        
        
        

         ////Creation D une date de salon
        $dateSalon01 = new DateSalon();
        $dateSalon01->setDate(new \DateTime('2008-12-13'));
        $dateSalon01->setHeureDebut(new \DateTime('2008-12-13T10:00:00+00:00'));
        $dateSalon01->setHeureFin(new \DateTime('2008-12-13T18:00:00+00:00'));
        $manager->persist($dateSalon01);
          ////Creation des salons
        $salon01 = new Salon();
        $salon01->setNom("Studyrama Bayonne");
        $salon01->setAdresse("11 Allee de Glain");
		$salon01->setComplement("");
        $salon01->setVille("Bayonne");
        $salon01->setCodePostal('64100');
        $salon01->setDescription("Stand de 24 m² (dont 6 pour tous les IUT) tenu par la Direction de la Communication de l UPPA, Le plus interessant est de 11h a 17h. Un binôme (tournante de 2h si necessaire) avec un enseignant et un etudiant.");
        $salon01->setAcces("");
        $salon01->setBilan("");
        $salon01->setDateLimite(new \DateTime('2008-11-07'));
        
              ////On lui ajoute une date DateSalon
        $salon01->addDatesSalon($dateSalon01);
        $manager->persist($salon01);

 
         ////Creation D une date de salon
        $dateSalon02 = new DateSalon();
        $dateSalon02->setDate(new \DateTime('2009-01-17'));
        $dateSalon02->setHeureDebut(new \DateTime('2009-01-17T09:00:00+00:00'));
        $dateSalon02->setHeureFin(new \DateTime('2009-01-17T13:00:00+00:00'));
        $manager->persist($dateSalon02);
         // //Creation des salons
        $salon02 = new Salon();
        $salon02->setNom("Journee Campus Ouvert Cote Basque");
        $salon02->setAdresse("2 Allee du Parc Montaury");
		$salon02->setComplement("");
        $salon02->setVille("Anglet");
        $salon02->setCodePostal('64600');
        $salon02->setDescription("1 permanence a la Nive (GEA-TC-Banque) et 1 a Montaury (Info-Multimedia-GIM)
Assurer des visites de certaines salles et dans une salle deTP montrer des programmes realises par les etudiants. Il faudrait aussi tenir un stand en labo mm de langue.");
        $salon02->setAcces("");
        $salon02->setBilan("");

        
                 //On lui ajoute une date DateSalon
        $salon02->addDatesSalon($dateSalon02);
        $manager->persist($salon02);
        
         ////Creation D une date de salon
        $dateSalon03 = new DateSalon();
        $dateSalon03->setDate(new \DateTime('2016-07-26'));
        $dateSalon03->setHeureDebut(new \DateTime('2016-07-26T09:00:00+00:00'));
        $dateSalon03->setHeureFin(new \DateTime('2016-07-26T13:00:00+00:00'));
        $manager->persist($dateSalon03);
         // //Creation des salons
        $salon03 = new Salon();
        $salon03->setNom("Journee Campus Ouvert");
        $salon03->setAdresse("2 Allee du Parc Montaury");
		$salon03->setComplement("");
        $salon03->setVille("Anglet");
        $salon03->setCodePostal('64600');
        $salon03->setDescription("1 permanence a la Nive (GEA-TC-Banque) et 1 a Montaury (Info-Multimedia-GIM)
Assurer des visites de certaines salles et dans une salle deTP montrer des programmes realises par les etudiants. Il faudrait aussi tenir un stand en labo mm de langue.");
        $salon03->setAcces("");
        $salon03->setBilan("");
        $salon03->setDateLimite(new \DateTime('2016-07-26'));
        
                 // //On lui ajoute une date DateSalon
        $salon03->addDatesSalon($dateSalon03);
        $manager->persist($salon03);


         ////Creation D une date de salon
        $dateSalon05 = new DateSalon();
        $dateSalon05->setDate(new \DateTime('2009-02-12'));
        $dateSalon05->setHeureDebut(new \DateTime('2009-02-12T09:00:00+00:00'));
        $dateSalon05->setHeureFin(new \DateTime('2009-01-12T16:00:00+00:00'));
        $manager->persist($dateSalon05);
        //  //Creation des salons
        $salon05 = new Salon();
        $salon05->setNom("Infosup Pau");
        $salon05->setAdresse("Universite Pau");
		$salon05->setComplement("");
        $salon05->setVille("Pau");
        $salon05->setCodePostal('64000');
        $salon05->setDescription("");
        $salon05->setAcces("");
        $salon05->setBilan("");
        $salon05->setDateLimite(new \DateTime(NULL));
        
        // //On lui ajoute une date DateSalon
        $salon05->addDatesSalon($dateSalon05);
        $manager->persist($salon05);


         ////Creation D une date de salon
        $dateSalon06 = new DateSalon();
        $dateSalon06->setDate(new \DateTime('2009-02-10'));
        $dateSalon06->setHeureDebut(new \DateTime('2009-02-10T09:00:00+00:00'));
        $dateSalon06->setHeureFin(new \DateTime('2009-02-10T16:45:00+00:00'));
        $manager->persist($dateSalon06);
         ////Creation des salons
        $salon06 = new Salon();
        $salon06->setNom("Infosup Landes");
        $salon06->setAdresse("Avenue de Villeneuve");
		$salon06->setComplement("");
        $salon06->setVille("Mont-de-Marsan");
        $salon06->setCodePostal('40000');
        $salon06->setDescription("Repas du midi assure - Cafe du matin et viennoiserie offerts");
        $salon06->setAcces("");
        $salon06->setBilan("");
        $salon06->setDateLimite(new \DateTime('2008-11-20'));
        
        ////On lui ajoute une date DateSalon
        $salon06->addDatesSalon($dateSalon06);
        $manager->persist($salon06);


         ////Creation D une date de salon
        $dateSalon07 = new DateSalon();
        $dateSalon07->setDate(new \DateTime('2009-02-10'));
        $dateSalon07->setHeureDebut(new \DateTime('2009-02-10T09:00:00+00:00'));
        $dateSalon07->setHeureFin(new \DateTime('2009-02-10T16:45:00+00:00'));
        $manager->persist($dateSalon07);
        ////Creation des salons
        $salon07 = new Salon();
        $salon07->setNom("Infosup Landes");
        $salon07->setAdresse("Avenue de Villeneuve");
        $salon07->setComplement("");
        $salon07->setVille("Mont-de-Marsan");
        $salon07->setCodePostal('40000');
        $salon07->setDescription("Repas du midi assure - Cafe du matin et viennoiserie offerts");
        $salon07->setAcces("");
        $salon07->setBilan("");
        $salon07->setDateLimite(new \DateTime('2008-11-20'));
        
        ////On lui ajoute une date DateSalon
        $salon07->addDatesSalon($dateSalon07);
        $manager->persist($salon07);


         ////Creation D une date de salon
        $dateSalon08 = new DateSalon();
        $dateSalon08->setDate(new \DateTime('2010-01-16'));
        $dateSalon08->setHeureDebut(new \DateTime('2010-01-16T10:00:00+00:00'));
        $dateSalon08->setHeureFin(new \DateTime('2010-01-16T16:00:00+00:00'));
        $manager->persist($dateSalon08);
        ////Creation des salons
        $salon08 = new Salon();
        $salon08->setNom("Studyrama Bayonne");
        $salon08->setAdresse("Maison des Associations, CGR Nive");
        $salon08->setComplement("");
        $salon08->setVille("Bayonne");
        $salon08->setCodePostal('64100');
        $salon08->setDescription("Stand de 24 m² (dont 6m² pour tous les IUT) tenu par la Direction de la Communication de l UPPA, Le plus interessant est de 11h a 17h. Un binôme (tournante de 2h si necessaire) avec un enseignant et un etudiant.");
        $salon08->setAcces("");
        $salon08->setBilan("Beaucoup de demande avant 11h30 auxquelles les personnes presentes n’ont pas pu repondre : les demandeurs ont ete invites a la journee portes ouvertes.
        • 16 demandes apres 11h30,
        • Stand tres petit pour le nombre de formations presentes.
        • Bonne presence des etudiants du departement.");
        $salon08->setDateLimite(new \DateTime('2010-01-04'));
        
         ////On lui ajoute une date DateSalon
        $salon08->addDatesSalon($dateSalon08);
        $manager->persist($salon08);


         ////Creation D une date de salon
        $dateSalon09 = new DateSalon();
        $dateSalon09->setDate(new \DateTime('2010-01-28'));
        $dateSalon09->setHeureDebut(new \DateTime('2010-01-28T09:00:00+00:00'));
        $dateSalon09->setHeureFin(new \DateTime('2010-01-28T16:00:00+00:00'));
        $manager->persist($dateSalon09);
          //Creation des salons
        $salon09 = new Salon();
        $salon09->setNom("Infosup Pau");
        $salon09->setAdresse("Universite Pau");
        $salon09->setComplement("");
        $salon09->setVille("Pau");
        $salon09->setCodePostal('64000');
        $salon09->setDescription("");
        $salon09->setAcces("");
        $salon09->setBilan("Entre 80 et 110 lyceens sont passes (pas tous interesses) ; les 4/5 sont passes entre 9h15 et 12h. 
A noter une grande proportion de filles parmi les candidats potentiels.
Pour l organisation, une salle nous avait ete attribuee mais elle etait occupee donc nous nous sommes (bien) installes dans une autre salle dans laquelle les GIM nous ont rejoint.");

        
                  //On lui ajoute une date DateSalon
        $salon09->addDatesSalon($dateSalon09);
        $manager->persist($salon09);



         //Creation D une date de salon
        $dateSalon10 = new DateSalon();
        $dateSalon10->setDate(new \DateTime('2010-02-13'));
        $dateSalon10->setHeureDebut(new \DateTime('2010-02-13T09:00:00+00:00'));
        $dateSalon10->setHeureFin(new \DateTime('2010-02-13T13:00:00+00:00'));
        $manager->persist($dateSalon10);
          //Creation des salons
        $salon10 = new Salon();
        $salon10->setNom("Journees Campus Ouvert Cote Basque");
        $salon10->setAdresse("2 Allee du Parc Montaury");
        $salon10->setComplement("");
        $salon10->setVille("Anglet");
        $salon10->setCodePostal('64600');
        $salon10->setDescription("1 permanence a la Nive (GEA-TC-Banque) et 1 a Montaury (Info-Multimedia-GIM)
Assurer des visites de certaines salles et dans une salle deTP montrer des programmes realises par les etudiants. Il faudrait aussi tenir un stand en labo mm de langue.");
        $salon10->setAcces("");
        $salon10->setBilan("Beaucoup de monde");

        
                  //On lui ajoute une date DateSalon
        $salon10->addDatesSalon($dateSalon10);
        $manager->persist($salon10);


         //Creation D une date de salon
        $dateSalon11 = new DateSalon();
        $dateSalon11->setDate(new \DateTime('2010-02-16'));
        $dateSalon11->setHeureDebut(new \DateTime('2010-02-16T09:00:00+00:00'));
        $dateSalon11->setHeureFin(new \DateTime('2010-02-16T16:45:00+00:00'));
        $manager->persist($dateSalon11);
          //Creation des salons
        $salon11 = new Salon();
        $salon11->setNom("Infosup Landes");
        $salon11->setAdresse("Avenue de Villeneuve");
        $salon11->setComplement("");
        $salon11->setVille("Mont-de-Marsan");
        $salon11->setCodePostal('40000');
        $salon11->setDescription("Repas du midi assure - Cafe du matin et viennoiserie offerts");
        $salon11->setAcces("");
        $salon11->setBilan("Une quarantaine d etudiants");
        $salon11->setDateLimite(new \DateTime('2009-10-05'));
        
                  //On lui ajoute une date DateSalon
        $salon11->addDatesSalon($dateSalon11);
        $manager->persist($salon11);


         //Creation D une date de salon
        $dateSalon12 = new DateSalon();
        $dateSalon12->setDate(new \DateTime('2011-01-15'));
        $dateSalon12->setHeureDebut(new \DateTime('2011-01-15T10:00:00+00:00'));
        $dateSalon12->setHeureFin(new \DateTime('2011-01-15T18:00:00+00:00'));
        $manager->persist($dateSalon12);
          //Creation des salons
        $salon12 = new Salon();
        $salon12->setNom("Studyrama Bayonne");
        $salon12->setAdresse("11 Allee de Glain");
        $salon12->setComplement("");
        $salon12->setVille("Bayonne");
        $salon12->setCodePostal('64100');
        $salon12->setDescription("Stand de 24 m² (dont 6 pour tous les IUT) tenu par la Direction de la Communication de l UPPA, Le plus interessant est de 11h a 17h. Un binôme (tournante de 2h si necessaire) avec un enseignant et un etudiant.");
        $salon12->setAcces("");
        $salon12->setBilan("");

        
                  //On lui ajoute une date DateSalon
        $salon12->addDatesSalon($dateSalon12);
        $manager->persist($salon12);

         //Creation D une date de salon
        $dateSalon12 = new DateSalon();
        $dateSalon12->setDate(new \DateTime('2011-01-26'));
        $dateSalon12->setHeureDebut(new \DateTime('2011-01-26T9:00:00+00:00'));
        $dateSalon12->setHeureFin(new \DateTime('2011-01-26T16:00:00+00:00'));
        $manager->persist($dateSalon12);
          //Creation des salons
        $salon12 = new Salon();
        $salon12->setNom("Semaine de l Orientation");
        $salon12->setAdresse("Lycee Rene Cassin");
        $salon12->setComplement("");
        $salon12->setVille("Bayonne");
        $salon12->setCodePostal('64100');
        $salon12->setDescription("eleves des classes de terminales et premiere");
        $salon12->setAcces("");
        $salon12->setBilan("");

        
                  //On lui ajoute une date DateSalon
        $salon12->addDatesSalon($dateSalon12);
        $manager->persist($salon12);

         //Creation D une date de salon
        $dateSalon13 = new DateSalon();
        $dateSalon13->setDate(new \DateTime('2011-01-27'));
        $dateSalon13->setHeureDebut(new \DateTime('2011-01-27T09:00:00+00:00'));
        $dateSalon13->setHeureFin(new \DateTime('2011-01-27T16:00:00+00:00'));
        $manager->persist($dateSalon13);
          //Creation des salons
        $salon13 = new Salon();
        $salon13->setNom("Infosup Pau");
        $salon13->setAdresse("Universite Pau");
        $salon13->setComplement("");
        $salon13->setVille("Pau");
        $salon13->setCodePostal('64000');
        $salon13->setDescription("Stand en salle 3 du STID");
        $salon13->setAcces("");
        $salon13->setBilan("");

        
                  //On lui ajoute une date DateSalon
        $salon13->addDatesSalon($dateSalon13);
        $manager->persist($salon13);

         //Creation D une date de salon
        $dateSalon14 = new DateSalon();
        $dateSalon14->setDate(new \DateTime('2011-02-05'));
        $dateSalon14->setHeureDebut(new \DateTime('2011-02-05T09:00:00+00:00'));
        $dateSalon14->setHeureFin(new \DateTime('2011-02-05T13:00:00+00:00'));
        $manager->persist($dateSalon14);
          //Creation des salons
        $salon14 = new Salon();
        $salon14->setNom("Journee Campus Ouvert Cote Basque");
        $salon14->setAdresse("2 Allee du Parc Montaury");
        $salon14->setComplement("");
        $salon14->setVille("Anglet");
        $salon14->setCodePostal('64600');
        $salon14->setDescription("1 permanence a la Nive (GEA-TC-Banque) et 1 a Montaury (Info-Multimedia-GIM)
        Assurer des visites de certaines salles et dans une salle deTP montrer des programmes realises par les etudiants. Il faudrait aussi tenir un stand en labo mm de langue.");
        $salon14->setAcces("");
        $salon14->setBilan("");

        
                  //On lui ajoute une date DateSalon
        $salon14->addDatesSalon($dateSalon14);
        $manager->persist($salon14);

         //Creation D une date de salon
        $dateSalon15 = new DateSalon();
        $dateSalon15->setDate(new \DateTime('2012-01-14'));
        $dateSalon15->setHeureDebut(new \DateTime('2012-01-14T10:00:00+00:00'));
        $dateSalon15->setHeureFin(new \DateTime('2012-01-14T18:00:00+00:00'));
        $manager->persist($dateSalon15);
          //Creation des salons
        $salon15 = new Salon();
        $salon15->setNom("Studyrama Bayonne");
        $salon15->setAdresse("11 Allee de Glain");
        $salon15->setComplement("");
        $salon15->setVille("Bayonne");
        $salon15->setCodePostal('64100');
        $salon15->setDescription("Stand de 24 m² (dont 6 pour tous les IUT) tenu par la Direction de la Communication de l UPPA, Le plus interessant est de 11h a 17h. Un binôme (tournante de 2h si necessaire) avec un enseignant et un etudiant.");
        $salon15->setAcces("");
        $salon15->setBilan("");

        
                  //On lui ajoute une date DateSalon
        $salon15->addDatesSalon($dateSalon15);
        $manager->persist($salon15);


         //Creation D une date de salon
        $dateSalon16 = new DateSalon();
        $dateSalon16->setDate(new \DateTime('2012-01-26'));
        $dateSalon16->setHeureDebut(new \DateTime('2012-01-26T09:00:00+00:00'));
        $dateSalon16->setHeureFin(new \DateTime('2009-01-26T16:00:00+00:00'));
        $manager->persist($dateSalon16);
          //Creation des salons
        $salon16 = new Salon();
        $salon16->setNom("Infosup Pau");
        $salon16->setAdresse("Universite Pau");
        $salon16->setComplement("");
        $salon16->setVille("Pau");
        $salon16->setCodePostal('64000');
        $salon16->setDescription("Stand en salle 3 du STID");
        $salon16->setAcces("");
        $salon16->setBilan("Du monde entre 9h et 12h15, puis tres peu jusqu'a 14h30.");

        
                  //On lui ajoute une date DateSalon
        $salon16->addDatesSalon($dateSalon16);
        $manager->persist($salon16);

         //Creation D une date de salon
        $dateSalon17 = new DateSalon();
        $dateSalon17->setDate(new \DateTime('2012-02-04'));
        $dateSalon17->setHeureDebut(new \DateTime('2012-02-04T09:00:00+00:00'));
        $dateSalon17->setHeureFin(new \DateTime('2012-02-04T13:00:00+00:00'));
        $manager->persist($dateSalon17);
          //Creation des salons
        $salon17 = new Salon();
        $salon17->setNom("Journee Campus Ouvert Cote Basque");
        $salon17->setAdresse("2 Allee du Parc Montaury");
        $salon17->setComplement("");
        $salon17->setVille("Anglet");
        $salon17->setCodePostal('64600');
        $salon17->setDescription("1 permanence a la Nive (GEA-TC-Banque) et 1 a Montaury (Info-Multimedia-GIM)
Assurer des visites de certaines salles et dans une salle de TP montrer des programmes realises par les etudiants. Il faudrait aussi tenir un stand en labo mm de langue.");
        $salon17->setAcces("");
        $salon17->setBilan("Bilan positif, plus de monde qu'en 2011.
Reduire le diaporama pour tenir 20 minutes.
Bilan tres mitige pour la LP.");

        
                  //On lui ajoute une date DateSalon
        $salon17->addDatesSalon($dateSalon17);
        $manager->persist($salon17);


         //Creation D une date de salon
        $dateSalon18 = new DateSalon();
        $dateSalon18->setDate(new \DateTime('2012-02-14'));
        $dateSalon18->setHeureDebut(new \DateTime('2012-02-14T09:00:00+00:00'));
        $dateSalon18->setHeureFin(new \DateTime('2012-02-14T16:45:00+00:00'));
        $manager->persist($dateSalon18);
          //Creation des salons
        $salon18 = new Salon();
        $salon18->setNom("Infosup Landes");
        $salon18->setAdresse("Avenue de Villeneuve");
        $salon18->setComplement("");
        $salon18->setVille("Mont-de-Marsan");
        $salon18->setCodePostal('40000');
        $salon18->setDescription("Repas du midi assure - Cafe du matin et viennoiserie offerts - Salon organise par l Etudiant et Sandrine ROMANO - sromano@letudiant.fr - 06 10 32 69 93
        Pour le comite d organisation,Gerard PROMP, Directeur du CIO, 295 Place de la Caserne Bosquet, 40000 MONT DE MARSAN, 05 58 06 42 43 - Ce.ciomtmar@ac-bordeaux.fr");
        $salon18->setAcces("");
        $salon18->setBilan("");

        
                  //On lui ajoute une date DateSalon
        $salon18->addDatesSalon($dateSalon18);
        $manager->persist($salon18);

         //Creation D une date de salon
        $dateSalon19 = new DateSalon();
        $dateSalon19->setDate(new \DateTime('2013-01-10'));
        $dateSalon19->setHeureDebut(new \DateTime('2013-01-10T09:00:00+00:00'));
        $dateSalon19->setHeureFin(new \DateTime('2013-01-10T16:45:00+00:00'));
        $manager->persist($dateSalon19);
          //Creation des salons
        $salon19 = new Salon();
        $salon19->setNom("Journee des CIO 40 et 64");
        $salon19->setAdresse("");
        $salon19->setComplement("");
        $salon19->setVille("Anglet");
        $salon19->setCodePostal('64600');
        $salon19->setDescription("Le pôle Informatique (et GIM) invite(nt) les représentants du CIO de Bayonne et SCUIO de Bayonne et Pau à mieux nous connaître. Présentation et discussion de 10h à 12h puis visite des locaux et repas au RU puis direction le site de Bayonne pour TC et GEA (14h-15h30)");
        $salon19->setAcces("");
        $salon19->setBilan("17 représentants des CIO de Bayonne (couvrant d'Hendaye à Garazi), de Dax (pour le Sud Landes) et le Directeur de Mont-de-Marsan. Matinée très intéressante. A renouveller en centrant davantage sur les CIO non représentés (Pau, Oloron et Orthez + Landes) et en commençant à 9h30. Idée : faire une présentation commune avec GIM sur l'organisation et le système IUT puis chaque département présente ses particularités. Pour l'accueil, penser à lancer une cafetière double 10 minutes avant le début");

        
                  //On lui ajoute une date DateSalon
        $salon19->addDatesSalon($dateSalon19);
        $manager->persist($salon19);

         //Creation D une date de salon
        $dateSalon20 = new DateSalon();
        $dateSalon20->setDate(new \DateTime('2013-01-12'));
        $dateSalon20->setHeureDebut(new \DateTime('2013-01-12T10:00:00+00:00'));
        $dateSalon20->setHeureFin(new \DateTime('2013-01-12T18:00:00+00:00'));
        $manager->persist($dateSalon20);
          //Creation des salons
        $salon20 = new Salon();
        $salon20->setNom("Studyrama Bayonne");
        $salon20->setAdresse("11 Allee de Glain");
        $salon20->setComplement("");
        $salon20->setVille("Bayonne");
        $salon20->setCodePostal('64100');
        $salon20->setDescription("Stand de 24 m² (dont 6 pour tous les IUT) tenu par la Direction de la Communication de l UPPA, Le plus interessant est de 11h a 17h. Un binôme (tournante de 2h si necessaire) avec un enseignant et un etudiant.");
        $salon20->setAcces("");
        $salon20->setBilan("Le bilan est très positif.
Pour la permanence 10h -14h30, Philippe a passé le plus clair de mon temps à renseigner des élèves et des parents, manifestement intéressés par la formation. ");

        
                  //On lui ajoute une date DateSalon
        $salon20->addDatesSalon($dateSalon20);
        $manager->persist($salon20);
        
        
         //Creation D une date de salon
        $dateSalon21 = new DateSalon();
        $dateSalon21->setDate(new \DateTime('2013-01-14'));
        $dateSalon21->setHeureDebut(new \DateTime('2013-01-14T15:00:00+00:00'));
        $dateSalon21->setHeureFin(new \DateTime('2013-01-14T16:00:00+00:00'));
        $manager->persist($dateSalon21);
		
		$dateSalon221 = new DateSalon();
        $dateSalon221->setDate(new \DateTime('2013-01-15'));
        $dateSalon221->setHeureDebut(new \DateTime('2013-01-15T15:00:00+00:00'));
        $dateSalon221->setHeureFin(new \DateTime('2013-01-15T16:00:00+00:00'));
        $manager->persist($dateSalon221);
		
		$dateSalon222 = new DateSalon();
        $dateSalon222->setDate(new \DateTime('2013-01-16'));
        $dateSalon222->setHeureDebut(new \DateTime('2013-01-16T15:00:00+00:00'));
        $dateSalon222->setHeureFin(new \DateTime('2013-01-16T16:00:00+00:00'));
        $manager->persist($dateSalon222);
		
		$dateSalon223 = new DateSalon();
        $dateSalon223->setDate(new \DateTime('2013-01-17'));
        $dateSalon223->setHeureDebut(new \DateTime('2013-01-17T15:00:00+00:00'));
        $dateSalon223->setHeureFin(new \DateTime('2013-01-17T16:00:00+00:00'));
        $manager->persist($dateSalon223);
		
		$dateSalon224 = new DateSalon();
        $dateSalon224->setDate(new \DateTime('2013-01-18'));
        $dateSalon224->setHeureDebut(new \DateTime('2013-01-18T15:00:00+00:00'));
        $dateSalon224->setHeureFin(new \DateTime('2013-01-18T16:00:00+00:00'));
        $manager->persist($dateSalon224);
          //Creation des salons
        $salon21 = new Salon();
        $salon21->setNom("Semaine de l Orientation");
        $salon21->setAdresse("Lycee Rene Cassin");
        $salon21->setComplement("");
        $salon21->setVille("Bayonne");
        $salon21->setCodePostal('64100');
        $salon21->setDescription("Une quarantaine d'élèves des classes de terminale S inscrits        Chrystèle JOURDAN-CAILLABERE        Proviseur Adjoint        Tel.: 05-59-58-42-13        Chrystele.Jourdan-Caillabere@ac-bordeaux.fr");
        $salon21->setAcces("");
        $salon21->setBilan("L'assemblée était assez fournie mais très peu de lycéen(ne)s semblaient intéressés par notre formation");

        
          //On lui ajoute une date DateSalon
        $salon21->addDatesSalon($dateSalon21);
		$salon21->addDatesSalon($dateSalon221);
		$salon21->addDatesSalon($dateSalon222);
		$salon21->addDatesSalon($dateSalon223);
		$salon21->addDatesSalon($dateSalon224);
        $manager->persist($salon21);
        
         //Creation D une date de salon
        $dateSalon22 = new DateSalon();
        $dateSalon22->setDate(new \DateTime('2013-01-31'));
        $dateSalon22->setHeureDebut(new \DateTime('2013-01-31T09:00:00+00:00'));
        $dateSalon22->setHeureFin(new \DateTime('2013-01-31T16:00:00+00:00'));
        $manager->persist($dateSalon22);
          //Creation des salons
        $salon22 = new Salon();
        $salon22->setNom("Infosup Pau");
        $salon22->setAdresse("Universite Pau");
        $salon22->setComplement("");
        $salon22->setVille("Pau");
        $salon22->setCodePostal('64000');
        $salon22->setDescription("Stand en salle 3 du STID");
        $salon22->setAcces("");
        $salon22->setBilan("Pas mal de monde le matin et beaucoup devraient venir à la JCO.");

        
                  //On lui ajoute une date DateSalon
        $salon22->addDatesSalon($dateSalon22);
        $manager->persist($salon22);
        
         //Creation D une date de salon
        $dateSalon23 = new DateSalon();
        $dateSalon23->setDate(new \DateTime('2014-01-30'));
        $dateSalon23->setHeureDebut(new \DateTime('2014-01-30T09:00:00+00:00'));
        $dateSalon23->setHeureFin(new \DateTime('2014-01-30T16:00:00+00:00'));
        $manager->persist($dateSalon23);
          //Creation des salons
        $salon23 = new Salon();
        $salon23->setNom("Infosup Pau");
        $salon23->setAdresse("Universite Pau");
        $salon23->setComplement("");
        $salon23->setVille("Pau");
        $salon23->setCodePostal('64000');
        $salon23->setDescription("Stand en salle 3 du STID");
        $salon23->setAcces("");
        $salon23->setBilan("Durant le salon : Il y a eu du monde en flux constant de 9h à 13h environ. Nous n'avons pas eu trop le temps de souffler durant la matinée. Avec un enseignant de plus, l'accueil des lycéens pourrait être amélioré : nous avons souvent fait face individuellement à des groupes de 5-6 lycéens, pas toujours facile d'avoir un échange personnalisé ou de répondre à toutes les questions ... peut-être aussi que l'effet de groupe a inhibé certains lycéens qui n'ont pas osé poser des questions plus personnelles ... difficile à dire.
Durant la matinée nous avons essentiellement touché des bacs S, STI et quelques bacs STG. Nous avons vu 1 étudiant en BTS info intéressé par la LPSIL.
L'après-midi, par contre, calme plat ... nous n'avons vu (quasiment) personne. Nous avons quitté le salon vers 15h20 (fin prévue à 16h).");

        
                  //On lui ajoute une date DateSalon
        $salon23->addDatesSalon($dateSalon23);
        $manager->persist($salon23);
        
        //Creation D une date de salon
        $dateSalon24 = new DateSalon();
		$dateSalon24->setDate(new \DateTime('2015-01-29'));
        $dateSalon24->setHeureDebut(new \DateTime('2015-01-29T09:00:00+00:00'));
        $dateSalon24->setHeureFin(new \DateTime('2015-01-29T16:00:00+00:00'));
        $manager->persist($dateSalon24);   
          //Creation des salons
        $salon24 = new Salon();
        $salon24->setNom("Infosup Pau");
        $salon24->setAdresse("Universite Pau");
        $salon24->setComplement("");
        $salon24->setVille("Pau");
        $salon24->setCodePostal('64000');
        $salon24->setDescription("Stand en salle 3 du STID");
        $salon24->setAcces("");
        $salon24->setBilan("");
 
         
                  //On lui ajoute une date DateSalon
        $salon24->addDatesSalon($dateSalon24);
        $manager->persist($salon24);  
        
         //Creation D une date de salon
        $dateSalon25 = new DateSalon();
        $dateSalon25->setDate(new \DateTime('2014-11-25'));
        $dateSalon25->setHeureDebut(new \DateTime('2014-11-25T09:00:00+00:00'));
        $dateSalon25->setHeureFin(new \DateTime('2014-11-25T17:00:00+00:00'));
        $manager->persist($dateSalon25);
          //Creation des salons
        $salon25 = new Salon();
        $salon25->setNom("Infosup Landes");
        $salon25->setAdresse("Avenue de Villeneuve");
        $salon25->setComplement("");
        $salon25->setVille("Mont-de-Marsan");
        $salon25->setCodePostal('40000');
        $salon25->setDescription("Repas du midi assuré - Café du matin et viennoiserie offerts - Salon organisé par l'Etudiant et Sandrine ROMANO - sromano@letudiant.fr - 06 10 32 69 93
        Pour le comité d’organisation,Gérard PROMP, Directeur du CIO, 295 Place de la Caserne Bosquet, 40000 MO");
        $salon25->setAcces("");
        $salon25->setBilan("Un stand de 9 m² était réservé à l'IUT de Bayonne. Sur ce stand nous avions nos collègues de GEA et de TC (représentés chacun d'entre eux par 3 étudiants, sans Prof).
        - Malgré l'espace réduit 9 m° pour 12 personnes , nous étions à l'entrée du bâtiment, et donc bien placés.
        - Les élèves arrivent par vague, en fonction des arrivées des bus, et donc la fréquentation se faisait un peu en dents de scie.
        - Les groupes GEA et TC ont été très sollicités, nous un peu moins, mais nous avons rencontré une quarantaine de personnes  intéressées , qui ont noté aussi la journée portes ouvertes du 7 février.
        - Organisation remarquable dans l'ensemble, avec notamment un repas à midi servi par une école hôtelière. ");
        $salon25->setDateLimite(new \DateTime('2014-11-03'));
        
                  //On lui ajoute une date DateSalon
        $salon25->addDatesSalon($dateSalon25);
        $manager->persist($salon25);
        
        
         //Creation D une date de salon
        $dateSalon26 = new DateSalon();
        $dateSalon26->setDate(new \DateTime('2013-01-12'));
        $dateSalon26->setHeureDebut(new \DateTime('2013-01-12T10:00:00+00:00'));
        $dateSalon26->setHeureFin(new \DateTime('2013-01-12T18:00:00+00:00'));
        $manager->persist($dateSalon26);
          //Creation des salons
        $salon26 = new Salon();
        $salon26->setNom("Studyrama Bayonne");
        $salon26->setAdresse("11 Allee de Glain");
        $salon26->setComplement("");
        $salon26->setVille("Bayonne");
        $salon26->setCodePostal('64100');
        $salon26->setDescription("Stand de 24 m² (dont 6 pour tous les IUT) tenu par la Direction de la Communication de l UPPA, Le plus interessant est de 11h a 17h. Un binôme (tournante de 2h si necessaire) avec un enseignant et un etudiant.");
        $salon26->setAcces("");
        $salon26->setBilan("Le bilan est très positif. Pour la permanence 10h -14h30, Philippe a passé le plus clair de mon temps à renseigner des élèves et des parents, manifestement intéressés par la formation. ");

        
                  //On lui ajoute une date DateSalon
        $salon26->addDatesSalon($dateSalon26);
        $manager->persist($salon26);
        
        
         //Creation D une date de salon
        $dateSalon27 = new DateSalon();
        $dateSalon27->setDate(new \DateTime('2014-01-11'));
        $dateSalon27->setHeureDebut(new \DateTime('2014-01-11T10:00:00+00:00'));
        $dateSalon27->setHeureFin(new \DateTime('2014-01-11T18:00:00+00:00'));
        $manager->persist($dateSalon27);
          //Creation des salons
        $salon27 = new Salon();
        $salon27->setNom("Studyrama Bayonne");
        $salon27->setAdresse("11 Allee de Glain");
        $salon27->setComplement("");
        $salon27->setVille("Bayonne");
        $salon27->setCodePostal('64100');
        $salon27->setDescription("Stand de 24 m² (dont 6 pour tous les IUT) tenu par la Direction de la Communication de l UPPA, Le plus interessant est de 11h a 17h. Un binôme (tournante de 2h si necessaire) avec un enseignant et un etudiant.");
        $salon27->setAcces("");
        $salon27->setBilan("Philippe est arrivé à 10h00, avant le début.Présent du département info : Thierry Nodenot.Un peu entassés sur l'espace. GEA et TC ont des étudiants. GIM et nous : NON Beaucoup de monde : majoritairement des parents avec enfants.Questions dans tous les sens.Des doutes sur le métier, la filière Confusions : prépa, école, fac, DUT, BTS, privé... Qques confusions entre STID, RESEAU et INFO Contacts de 3mn à 20mn selon les cas.Environ 12 contacts et disons 5 sûrs pour l'info.Pic de l'activité en début d'après-midi.
        Philippe est reparti à 15h00. ");

        
              //On lui ajoute une date DateSalon
        $salon27->addDatesSalon($dateSalon27);
        $manager->persist($salon27);
        
        
         //Creation D une date de salon
        $dateSalon28 = new DateSalon();
        $dateSalon28->setDate(new \DateTime('2013-02-13'));
        $dateSalon28->setHeureDebut(new \DateTime('2013-02-13T09:00:00+00:00'));
        $dateSalon28->setHeureFin(new \DateTime('2013-02-13T13:00:00+00:00'));
        $manager->persist($dateSalon28);
          //Creation des salons
        $salon28 = new Salon();
        $salon28->setNom("Journee Campus Ouvert Cote Basque");
        $salon28->setAdresse("2 Allee du Parc Montaury");
        $salon28->setComplement("");
        $salon28->setVille("Anglet");
        $salon28->setCodePostal('64600');
        $salon28->setDescription("1 permanence a la Nive (GEA-TC-Banque) et 1 a Montaury (Info-Multimedia-GIM). Assurer des visites de certaines salles et dans une salle deTP montrer des programmes realises par les etudiants. Il faudrait aussi tenir un stand en labo mm de langue.");
        $salon28->setAcces("");
        $salon28->setBilan("Il ne faut pas moins d'enseignants ni d'étudiants. Pour les étudiants, il faudrait occuper 2 salles de TP avec 2 étudiants de DUT Info2 par salle. Pour les visites, il faut organiser des groupes de 8 visiteurs max.");

        
                  //On lui ajoute une date DateSalon
        $salon28->addDatesSalon($dateSalon28);
        $manager->persist($salon28);
        
        
         //Creation D une date de salon
        $dateSalon29 = new DateSalon();
        $dateSalon29->setDate(new \DateTime('2014-02-08'));
        $dateSalon29->setHeureDebut(new \DateTime('2014-02-08T09:00:00+00:00'));
        $dateSalon29->setHeureFin(new \DateTime('2014-02-08T13:00:00+00:00'));
        $manager->persist($dateSalon29);
          //Creation des salons
        $salon29 = new Salon();
        $salon29->setNom("Journee Campus Ouvert Cote Basque");
        $salon29->setAdresse("2 Allee du Parc Montaury");
        $salon29->setComplement("");
        $salon29->setVille("Anglet");
        $salon29->setCodePostal('64600');
        $salon29->setDescription("1 permanence a la Nive (GEA-TC-Banque) et 1 a Montaury (Info-Multimedia-GIM)
Assurer des visites de certaines salles et dans une salle deTP montrer des programmes realises par les etudiants. Il faudrait aussi tenir un stand en labo mm de langue.");
        $salon29->setAcces("");
        $salon29->setBilan("Bilan très positif. La présence de l'ensemble des enseignants serait souhaitable car nous n'étions pas trop à 10.");

        
                  //On lui ajoute une date DateSalon
        $salon29->addDatesSalon($dateSalon29);
        $manager->persist($salon29);
        
        
         //Creation D une date de salon
        $dateSalon30 = new DateSalon();
        $dateSalon30->setDate(new \DateTime('2015-02-07'));
        $dateSalon30->setHeureDebut(new \DateTime('2015-02-07T09:00:00+00:00'));
        $dateSalon30->setHeureFin(new \DateTime('2015-02-07T13:00:00+00:00'));
        $manager->persist($dateSalon30);
          //Creation des salons
        $salon30 = new Salon();
        $salon30->setNom("Journee Campus Ouvert Cote Basque");
        $salon30->setAdresse("2 Allee du Parc Montaury");
        $salon30->setComplement("");
        $salon30->setVille("Anglet");
        $salon30->setCodePostal('64600');
        $salon30->setDescription("1 permanence a la Nive (GEA-TC-Banque) et 1 a Montaury (Info-Multimedia-GIM). Assurer des visites de certaines salles et dans une salle deTP montrer des programmes realises par les etudiants. Il faudrait aussi tenir un stand en labo mm de langue.");
        $salon30->setAcces("");
        $salon30->setBilan("");

        
                  //On lui ajoute une date DateSalon
        $salon30->addDatesSalon($dateSalon30);
        $manager->persist($salon30);
        
         //Creation D une date de salon
        $dateSalon31 = new DateSalon();
        $dateSalon31->setDate(new \DateTime('2013-02-12'));
        $dateSalon31->setHeureDebut(new \DateTime('2013-02-12T09:00:00+00:00'));
        $dateSalon31->setHeureFin(new \DateTime('2013-02-12T16:45:00+00:00'));
        $manager->persist($dateSalon31);
          //Creation des salons
        $salon31 = new Salon();
        $salon31->setNom("Infosup Landes");
        $salon31->setAdresse("Avenue de Villeneuve");
        $salon31->setComplement("");
        $salon31->setVille("Mont-de-Marsan");
        $salon31->setCodePostal('40000');
        $salon31->setDescription("Repas du midi assuré - Café du matin et viennoiserie offerts - Salon organisé par l'Etudiant et Sandrine ROMANO - sromano@letudiant.fr - 06 10 32 69 93
Pour le comité d’organisation,Gérard PROMP, Directeur du CIO, 295 Place de la Caserne Bosquet, 40000 MO");
        $salon31->setAcces("");
        $salon31->setBilan("La taille du stand impose une présence seulement de 1 enseignant + 1 étudiant. Il faudrait aussi se synchroniser avec les autres départements tant en nombre de participants que pour harmoniser les supports de présentation.");

        
          //On lui ajoute une date DateSalon
        $salon31->addDatesSalon($dateSalon31);
        $manager->persist($salon31);

        
         //Creation D une date de salon
        $dateSalon32 = new DateSalon();
        $dateSalon32->setDate(new \DateTime('2013-11-26'));
        $dateSalon32->setHeureDebut(new \DateTime('2013-11-26T09:00:00+00:00'));
        $dateSalon32->setHeureFin(new \DateTime('2013-11-26T16:45:00+00:00'));
        $manager->persist($dateSalon32);
          //Creation des salons
        $salon32 = new Salon();
        $salon32->setNom("Infosup Landes");
        $salon32->setAdresse("Avenue de Villeneuve");
        $salon32->setComplement("");
        $salon32->setVille("Mont-de-Marsan");
        $salon32->setCodePostal('40000');
        $salon32->setDescription("Repas du midi assuré - Café du matin et viennoiserie offerts - Salon organisé par l'Etudiant et Sandrine ROMANO - sromano@letudiant.fr - 06 10 32 69 93
Pour le comité d’organisation,Gérard PROMP, Directeur du CIO, 295 Place de la Caserne Bosquet, 40000 MO");
        $salon32->setAcces("");
        $salon32->setBilan("La taille du stand impose une présence seulement de 1 enseignant + 1 étudiant. Il faudrait aussi se synchroniser avec les autres départements tant en nombre de participants que pour harmoniser les supports de présentation.");

        
          //On lui ajoute une date DateSalon
        $salon32->addDatesSalon($dateSalon32);
        $manager->persist($salon32);
        
        
         //Creation D une date de salon
        $dateSalon33 = new DateSalon();
        $dateSalon33->setDate(new \DateTime('2013-12-07'));
        $dateSalon33->setHeureDebut(new \DateTime('2013-12-07T09:00:00+00:00'));
        $dateSalon33->setHeureFin(new \DateTime('2013-12-07T15:00:00+00:00'));
        $manager->persist($dateSalon33);
          //Creation des salons
        $salon33 = new Salon();
        $salon33->setNom("Journee des Anciens - DUT Info");
        $salon33->setAdresse("2 Allee du Parc Montaury");
        $salon33->setComplement("");
        $salon33->setVille("Anglet");
        $salon33->setCodePostal('64600');
        $salon33->setDescription("8h30 : accueil, café. 9h00 (amphi) : Ouverture par 2 conférences sur le thème des Réseaux sociaux professionnels (Frédéric PERES - CCI et Yoann DARQUEST - Résociopro QSE). L idée étant que les anciens réagissent à la présentation et participent ensuite au débat, en parlant de leur expérience. Elles seront suivies de présentation des parcours des anciens présents.  
10h45 : Pause Café. 11h00 : Trois salles de TD sont prévues selon les expériences présentées :- La salle 124-125  insertion professionnelle rapide : viendront témoigner les anciens qui se sont insérés directement après le DUT ou après une LP. Avec également les étudiants qui sont actuellement en LP.
- L'amphithéâtre  poursuite d études longues  (en informatique)- La salle Autres parcours  : pour les ceux qui ont suivi une autre voie que l informatique après le DUT.  
13h : buffet et discussions informelles...");
        $salon33->setAcces("");
        $salon33->setBilan("Bilan très positif. Un compte-rendu de 1 page est paru dans le magazine EsprIUT de mars 2014 (page 43). L'an prochaini il faudra aussi le faire paraitre dans la lettreUPPA (et dans Sud-Ouest avec aussi un article d'annonce ?)");

        
          //On lui ajoute une date DateSalon
        $salon33->addDatesSalon($dateSalon33);
        $manager->persist($salon33);
        
        
         //Creation D une date de salon
        $dateSalon33 = new DateSalon();
        $dateSalon33->setDate(new \DateTime('2014-12-06'));
        $dateSalon33->setHeureDebut(new \DateTime('2014-12-06T08:30:00+00:00'));
        $dateSalon33->setHeureFin(new \DateTime('2014-12-06T15:00:00+00:00'));
        $manager->persist($dateSalon33);
          //Creation des salons
        $salon33 = new Salon();
        $salon33->setNom("Journee des Anciens - DUT Info");
        $salon33->setAdresse("2 Allee du Parc Montaury");
        $salon33->setComplement("");
        $salon33->setVille("Anglet");
        $salon33->setCodePostal('64600');
        $salon33->setDescription("8h30 : accueil, café. 9h00 (amphi) : Ouverture par 2 conférences sur le thème des Réseaux sociaux professionnels (Frédéric PERES - CCI et Yoann DARQUEST - Résociopro QSE). L idée étant que les anciens réagissent à la présentation et participent ensuite au débat, en parlant de leur expérience. Elles seront suivies de présentation des parcours des anciens présents.  
10h45 : Pause Café. 11h00 : Trois salles de TD sont prévues selon les expériences présentées :- La salle 124-125  insertion professionnelle rapide : viendront témoigner les anciens qui se sont insérés directement après le DUT ou après une LP. Avec également les étudiants qui sont actuellement en LP.
- L'amphithéâtre  poursuite d études longues  (en informatique)- La salle Autres parcours  : pour les ceux qui ont suivi une autre voie que l informatique après le DUT.  
13h : buffet et discussions informelles...");
        $salon33->setAcces("");
        $salon33->setBilan("");
        $salon33->setBilan("");

        
          //On lui ajoute une date DateSalon
        $salon33->addDatesSalon($dateSalon33);
        $manager->persist($salon33);
        
        
        
         //Creation D une date de salon
        $dateSalon34 = new DateSalon();
        $dateSalon34->setDate(new \DateTime('2014-01-15'));
        $dateSalon34->setHeureDebut(new \DateTime('2014-01-15T09:45:00+00:00'));
        $dateSalon34->setHeureFin(new \DateTime('2014-01-15T14:00:00+00:00'));
        $manager->persist($dateSalon34);
          //Creation des salons
        $salon34 = new Salon();
        $salon34->setNom("Journée avec les enseignants Info des Bacs S option ISN et STI2D option SIN du 40 et du 64");
        $salon34->setAdresse("2 Allee du Parc Montaury");
        $salon34->setComplement("");
        $salon34->setVille("Anglet");
        $salon34->setCodePostal('64600');
        $salon34->setDescription("");
        $salon34->setAcces("");
        $salon34->setBilan("");

        
          //On lui ajoute une date DateSalon
        $salon34->addDatesSalon($dateSalon34);
        $manager->persist($salon34);
        
         //Creation D une date de salon
        $dateSalon35 = new DateSalon();
        $dateSalon35->setDate(new \DateTime('2015-01-10'));
        $dateSalon35->setHeureDebut(new \DateTime('2015-01-10T10:00:00+00:00'));
        $dateSalon35->setHeureFin(new \DateTime('2015-01-10T18:00:00+00:00'));
        $manager->persist($dateSalon35);
          //Creation des salons
        $salon35 = new Salon();
        $salon35->setNom("Studyrama Bayonne");
        $salon35->setAdresse("11 Allee de Glain");
        $salon35->setComplement("");
        $salon35->setVille("Bayonne");
        $salon35->setCodePostal('64100');
        $salon35->setDescription("Stand de 24 m² (dont 6 pour tous les IUT) tenu par la Direction de la Communication de l UPPA, Le plus interessant est de 11h a 17h. Un binôme (tournante de 2h si necessaire) avec un enseignant et un etudiant.");
        $salon35->setAcces("");
        $salon35->setBilan("Grosse affluence. Un relai à 3 au lieu de 2 n'aurait pas été superflu. Un stand bien plus important serait fortement apprécié.");

        
                 // //On lui ajoute une date DateSalon
        $salon35->addDatesSalon($dateSalon35);
        $manager->persist($salon35); 
        
         // On declenche l enregistrement
        $manager->flush();
        
    } 
     public function getOrder()
    {
         //the order in which fixtures will be loaded
         //the lower the number, the sooner that this fixture is loaded
        return 3;

    }
}