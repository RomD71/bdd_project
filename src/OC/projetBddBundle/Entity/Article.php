<?php

namespace OC\projetBddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * Article
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="OC\projetBddBundle\Repository\articleRepository")
 *
 */
class Article
{
    /**
     * @var integer
     * @ORM\Column(name="id_Article", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_Article", type="string")
     */
    private $contenuArticle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_Publication", type="datetime")
     */
    private $datePublication;

    /**
     * @var \OC\projetBddBundle\Entity\Fichier
     *
     * @ORM\OneToMany(targetEntity="Fichier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Fichier", referencedColumnName="id_Fichier")
     * })
     */
    private $idFichier;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MotCle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Mot_Cle", referencedColumnName="id_Mot_Cle")
     * })
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

