<?php

namespace EventIUT\SalonsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Request;
use EventIUT\SalonsBundle\Entity\Salon;

class SalonsController extends Controller
{
    public function homepageAction(Request $requeteUtilisateur,$id)
    {
	$gestionnaireEntite= $this->getDoctrine()->getManager();
	$repositorySalon=$gestionnaireEntite->getRepository('EventIUTSalonsBundle:Salon');
    
	$onglet1="in active";
	$onglet2="";
	$li1=stripslashes("class=\"active\"");
	$li2="";
	$li11=stripslashes("aria-expanded=\"true\"");
	$li22="";
	switch ($id) {  
    case 0:
		$tabSalonsAVenir=$repositorySalon->findAllSalonsAVenirNomASC();
		$tabSalonsPasse=$repositorySalon->findAllSalonsPasseNomASC();
		$onglet1="in active";
		$onglet2="";
		$li1="class=active";
		$li2="";
        break;
    case 1:
		$tabSalonsAVenir=$repositorySalon->findAllSalonsAVenirNomASC();
		$tabSalonsPasse=$repositorySalon->findAllSalonsPasseNomASC();
        $onglet1="";
		$onglet2="in active";
		$li1="";
		$li2="class=active";
		break;
    case 2:
		$tabSalonsAVenir=$repositorySalon->findAllSalonsAVenirNomDESC();
		$tabSalonsPasse=$repositorySalon->findAllSalonsPasseNomDESC();
		$onglet1="in active";
		$onglet2="";
		$li1="class=active";
		$li2="";
		break;
	case 3:
        $tabSalonsAVenir=$repositorySalon->findAllSalonsAVenirNomDESC();
		$tabSalonsPasse=$repositorySalon->findAllSalonsPasseNomDESC();
        $onglet1="";
		$onglet2="in active";
		$li1="";
		$li2="class=active";
		break;
	case 4:
        $tabSalonsAVenir=$repositorySalon->findAllSalonsAVenirDateASC();
		$tabSalonsPasse=$repositorySalon->findAllSalonsPasseDateASC();
		$onglet1="in active";
		$onglet2="";
		$li1="class=active";
		$li2="";
		break;
	case 5:
        $tabSalonsAVenir=$repositorySalon->findAllSalonsAVenirDateASC();
		$tabSalonsPasse=$repositorySalon->findAllSalonsPasseDateASC();
        $onglet1="";
		$onglet2="in active";
		$li1="";
		$li2="class=active";
		break;
	case 6:
		$tabSalonsAVenir=$repositorySalon->findAllSalonsAVenirDateDESC();
		$tabSalonsPasse=$repositorySalon->findAllSalonsPasseDateDESC();
		$onglet1="in active";
		$onglet2="";
		$li1="class=active";
		$li2="";
		break;
    case 7:
		$tabSalonsAVenir=$repositorySalon->findAllSalonsAVenirDateDESC();
		$tabSalonsPasse=$repositorySalon->findAllSalonsPasseDateDESC();
        $onglet1="";
		$onglet2="in active";
		$li1="";
		$li2="class=active";
		break;
    case 8:
		$tabSalonsAVenir=$repositorySalon->findAllSalonsAVenirVilleASC();
		$tabSalonsPasse=$repositorySalon->findAllSalonsPasseVilleASC();
		$onglet1="in active";
		$onglet2="";
		$li1="class=active";
		$li2="";
		break;
	case 9:
        $tabSalonsAVenir=$repositorySalon->findAllSalonsAVenirVilleASC();
		$tabSalonsPasse=$repositorySalon->findAllSalonsPasseVilleASC();
		$onglet1="";
		$onglet2="in active";
		$li1="";
		$li2="class=active";
		break;
	case 10:
        $tabSalonsAVenir=$repositorySalon->findAllSalonsAVenirVilleDESC();
		$tabSalonsPasse=$repositorySalon->findAllSalonsPasseVilleDESC();
		$onglet1="in active";
		$onglet2="";
		$li1="class=active";
		$li2="";
		break;
	case 11:
        $tabSalonsAVenir=$repositorySalon->findAllSalonsAVenirVilleDESC();
		$tabSalonsPasse=$repositorySalon->findAllSalonsPasseVilleDESC();
		$onglet1="";
		$onglet2="in active";
		$li1="";
		$li2="class=active";
		break;
	
}

	
	$recherches = array();
	$createurFormulaire = $this->createFormBuilder($recherches);
	$createurFormulaire 
			-> add('recherche','text', array('label'=>' '));
	$formulaireRecherche= $createurFormulaire->getForm();
	
	$formulaireRecherche->handleRequest($requeteUtilisateur);
	
	
	if($formulaireRecherche->isSubmitted()){
	
	$requete=$formulaireRecherche->getData();
	$tabSalonsAVenir=$repositorySalon->findSalonAVenirRecherche($requete['recherche']);
	$tabSalonsPasse=$repositorySalon->findSalonPasseRecherche($requete['recherche']);
	
	}

        return $this->render('EventIUTSalonsBundle:Salons:homepage.html.twig',array('tabSalonsAVenir'=>$tabSalonsAVenir,'tabSalonsPasse'=>$tabSalonsPasse,'formulaireRecherche'=>$formulaireRecherche ->createView(),'onglet1'=>$onglet1,'onglet2'=>$onglet2,'li1'=>$li1,'li2'=>$li2,'li11'=>$li11,'li22'=>$li22));
	
	}
	
	public function homepageResponsableAction()
    {
	$gestionnaireEntite= $this->getDoctrine()->getManager();
	$repositorySalon=$gestionnaireEntite->getRepository('EventIUTSalonsBundle:Salon');
    $tabSalonsAVenir=$repositorySalon->findAllSalonsAVenirDateASC();
	$tabSalonsPasse=$repositorySalon->findAllSalonsPasseDateASC();
	
        return $this->render('EventIUTSalonsBundle:Salons:homepageResponsable.html.twig',array('tabSalonsAVenir'=>$tabSalonsAVenir,'tabSalonsPasse'=>$tabSalonsPasse));
    }
	
    
    public function voirSalonsAction($id)
    {
	$gestionnaireEntite= $this->getDoctrine()->getManager();
	$repositorySalon=$gestionnaireEntite->getRepository('EventIUTSalonsBundle:Salon');
    $Salon=$repositorySalon->find($id);
        return $this->render('EventIUTSalonsBundle:Salons:voirSalons.html.twig',array('Salon'=>$Salon));
    }
    
    public function dashboardAction()
    {
        return $this->render('EventIUTSalonsBundle:Salons:dashboard.html.twig');
    }   
    
    public function ajouterSalonAction(Request $requeteUser)
    {
		$salon = new Salon();
		
		$formulaireSalon=$this->createFormBuilder($salon)
		->add('nom', 'text')
        ->add('adresse', 'text')
        ->add('ville', 'text')
        ->add('codePostal', 'text')
        ->add('dateLimite', 'date', array('widget'=>'single_text','required'=>false))		
		->add('description', 'textarea')
		->add('acces', 'textarea')
		->add('bilan', 'textarea')
		->getForm();
		
		$formulaireSalon->handleRequest($requeteUser);
		
		if($formulaireSalon->isSubmitted() )
		{$gestionnaireEntite=$this->getDoctrine()->getManager();
		$gestionnaireEntite->persist($salon);
		$gestionnaireEntite->flush();
		}
		
        return $this->render('EventIUTSalonsBundle:Salons:ajouterSalon.html.twig', array('formulaireSalon' => $formulaireSalon->createView()));
    }


	public function rechercheAction($requete){
	
	$gestionnaireEntite= $this->getDoctrine()->getManager();
	$repositorySalon=$gestionnaireEntite->getRepository('EventIUTSalonsBundle:Salon');
    
	$tabSalons=$repositorySalon->findSalonRecherche($requete);	
	 
	return $this->render('EventIUTSalonsBundle:Salons:recherche.html.twig',array('tabSalons'=>$tabSalons,'requete'=>$requete));
}	

}
