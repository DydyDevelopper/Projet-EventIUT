<?php

namespace prostage\ProstageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProstageController extends Controller
{
    public function indexAction()
    {
		// Récuperer la liste des stages
		// $stage = 
        return $this->render('prostageProstageBundle:Prostage:index.html.twig');
    }
}
