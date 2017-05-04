<?php

namespace OC\projetBddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * Auteur
 * @ORM\Table(name="auteur")
 * @ORM\Entity(repositoryClass="OC\projetBddBundle\Repository\auteurRepository")
 *
 */
class Auteur
{
    /**
     * @var integer
     * @ORM\Column(name="id_Auteur", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Pseudo_Auteur", type="string")
     */
    private $pseudoAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Mdp", type="string")
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string")
     */
    private $mail;

    /**
     * @var \OC\projetBddBundle\Entity\Article
     *
     * @ORM\OneToMany(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Article", referencedColumnName="id_Article")
     * })
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

