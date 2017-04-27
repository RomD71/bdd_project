<?php

namespace OC\projetBddBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BddBundle:Home:index.html.twig');
    }
}
