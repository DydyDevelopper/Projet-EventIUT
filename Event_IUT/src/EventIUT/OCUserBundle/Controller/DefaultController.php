<?php

namespace EventIUT\OCUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EventIUTOCUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
