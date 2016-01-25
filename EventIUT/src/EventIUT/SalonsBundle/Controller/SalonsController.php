<?php

namespace EventIUT\SalonsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SalonsController extends Controller
{
    public function indexAction()
    {
        return $this->render('EventIUTSalonsBundle:Salons:index.html.twig');
    }
	
	public function voirSalonsAction()
    {
        return $this->render('EventIUTSalonsBundle:Salons:voirSalons.html.twig');
    }
}
