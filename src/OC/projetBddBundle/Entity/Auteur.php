<?php

namespace OC\projetBddBundle\Entity;

/**
 * Auteur
 */
class Auteur
{
    /**
     * @var integer
     */
    private $idAuteur;

    /**
     * @var string
     */
    private $pseudoAuteur;

    /**
     * @var string
     */
    private $mdp;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var \OC\projetBddBundle\Entity\Article
     */
    private $idArticle;


    /**
     * Get idAuteur
     *
     * @return integer
     */
    public function getIdAuteur()
    {
        return $this->idAuteur;
    }

    /**
     * Set pseudoAuteur
     *
     * @param string $pseudoAuteur
     *
     * @return Auteur
     */
    public function setPseudoAuteur($pseudoAuteur)
    {
        $this->pseudoAuteur = $pseudoAuteur;

        return $this;
    }

    /**
     * Get pseudoAuteur
     *
     * @return string
     */
    public function getPseudoAuteur()
    {
        return $this->pseudoAuteur;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Auteur
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Auteur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set idArticle
     *
     * @param \OC\projetBddBundle\Entity\Article $idArticle
     *
     * @return Auteur
     */
    public function setIdArticle(\OC\projetBddBundle\Entity\Article $idArticle = null)
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    /**
     * Get idArticle
     *
     * @return \OC\projetBddBundle\Entity\Article
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }
}

