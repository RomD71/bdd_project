<?php

namespace OC\projetBddBundle\Controller;

use DateTime;
use OC\projetBddBundle\Entity\Article;
use OC\projetBddBundle\Form\ArticleType;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function indexAction(Request $request)
    {
        $article = new Article();
        $formArticle = $this->createForm(ArticleType::class, $article);

        $repos = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('BddBundle:Article')
            ->findAll();

        $formArticle->handleRequest($request);
        if ($formArticle->isSubmitted() && $formArticle->isValid()) {

            $date = new DateTime();
            $em = $this->getDoctrine()->getManager();
            $article->setDatePublication($date);
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('bdd_homepage');
        }

        $content = $this->get('templating')->render('BddBundle:Home:index.html.twig', [
            'article' => $repos,
            'formArticle' => $formArticle->createView(),
        ]);
        return new Response($content);
    }
}
