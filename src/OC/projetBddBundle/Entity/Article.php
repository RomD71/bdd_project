<?php

namespace OC\projetBddBundle\Entity;

/**
 * Article
 */
class Article
{
    /**
     * @var integer
     */
    private $idArticle;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $contenuArticle;

    /**
     * @var \DateTime
     */
    private $datePublication;

    /**
     * @var \OC\projetBddBundle\Entity\Fichier
     */
    private $idFichier;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idMotCle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMotCle = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idArticle
     *
     * @return integer
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenuArticle
     *
     * @param string $contenuArticle
     *
     * @return Article
     */
    public function setContenuArticle($contenuArticle)
    {
        $this->contenuArticle = $contenuArticle;

        return $this;
    }

    /**
     * Get contenuArticle
     *
     * @return string
     */
    public function getContenuArticle()
    {
        return $this->contenuArticle;
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     *
     * @return Article
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set idFichier
     *
     * @param \OC\projetBddBundle\Entity\Fichier $idFichier
     *
     * @return Article
     */
    public function setIdFichier(\OC\projetBddBundle\Entity\Fichier $idFichier = null)
    {
        $this->idFichier = $idFichier;

        return $this;
    }

    /**
     * Get idFichier
     *
     * @return \OC\projetBddBundle\Entity\Fichier
     */
    public function getIdFichier()
    {
        return $this->idFichier;
    }

    /**
     * Add idMotCle
     *
     * @param \OC\projetBddBundle\Entity\MotCle $idMotCle
     *
     * @return Article
     */
    public function addIdMotCle(\OC\projetBddBundle\Entity\MotCle $idMotCle)
    {
        $this->idMotCle[] = $idMotCle;

        return $this;
    }

    /**
     * Remove idMotCle
     *
     * @param \OC\projetBddBundle\Entity\MotCle $idMotCle
     */
    public function removeIdMotCle(\OC\projetBddBundle\Entity\MotCle $idMotCle)
    {
        $this->idMotCle->removeElement($idMotCle);
    }

    /**
     * Get idMotCle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdMotCle()
    {
        return $this->idMotCle;
    }
}

