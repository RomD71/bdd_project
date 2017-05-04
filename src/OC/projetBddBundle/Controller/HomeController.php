<?php

namespace OC\projetBddBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function indexAction()
    {
        $repos = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('BddBundle:Article')
            ->findAll();

        $content = $this->get('templating')->render('BddBundle:Home:index.html.twig',[
            'article' => $repos,
        ]);
        return new Response($content);

//        return $this->render('BddBundle:Home:index.html.twig');
    }
}
