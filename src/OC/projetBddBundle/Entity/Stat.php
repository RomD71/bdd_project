<?php

namespace OC\projetBddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * Stat
 * @ORM\Table(name="stat")
 * @ORM\Entity(repositoryClass="OC\projetBddBundle\Repository\statRepository")
 *
 */
class Stat
{
    /**
     * @var integer
     * @ORM\Column(name="id_Stat", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStat;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_Stat", type="string")
     */
    private $libStat;

    /**
     * @var integer
     *
     * @ORM\Column(name="Compteur", type="integer")
     */
    private $compteur;

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
     * Get idStat
     *
     * @return integer
     */
    public function getIdStat()
    {
        return $this->idStat;
    }

    /**
     * Set libStat
     *
     * @param string $libStat
     *
     * @return Stat
     */
    public function setLibStat($libStat)
    {
        $this->libStat = $libStat;

        return $this;
    }

    /**
     * Get libStat
     *
     * @return string
     */
    public function getLibStat()
    {
        return $this->libStat;
    }

    /**
     * Set compteur
     *
     * @param integer $compteur
     *
     * @return Stat
     */
    public function setCompteur($compteur)
    {
        $this->compteur = $compteur;

        return $this;
    }

    /**
     * Get compteur
     *
     * @return integer
     */
    public function getCompteur()
    {
        return $this->compteur;
    }

    /**
     * Set idArticle
     *
     * @param \OC\projetBddBundle\Entity\Article $idArticle
     *
     * @return Stat
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

