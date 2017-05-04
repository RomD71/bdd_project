<?php

namespace OC\projetBddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * MotCle
 * @ORM\Table(name="mot_cle")
 * @ORM\Entity(repositoryClass="OC\projetBddBundle\Repository\motCleRepository")
 *
 */
class MotCle
{
    /**
     * @var integer
     * @ORM\Column(name="id_Mot_Cle", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMotCle;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_Mot_Cle", type="string")
     */
    private $libMotCle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Categorie", referencedColumnName="id_Categorie")
     * })
     */
    private $idCategorie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Article", referencedColumnName="id_Article")
     * })
     */
    private $idArticle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCategorie = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idArticle = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idMotCle
     *
     * @return integer
     */
    public function getIdMotCle()
    {
        return $this->idMotCle;
    }

    /**
     * Set libMotCle
     *
     * @param string $libMotCle
     *
     * @return MotCle
     */
    public function setLibMotCle($libMotCle)
    {
        $this->libMotCle = $libMotCle;

        return $this;
    }

    /**
     * Get libMotCle
     *
     * @return string
     */
    public function getLibMotCle()
    {
        return $this->libMotCle;
    }

    /**
     * Add idCategorie
     *
     * @param \OC\projetBddBundle\Entity\Categorie $idCategorie
     *
     * @return MotCle
     */
    public function addIdCategorie(\OC\projetBddBundle\Entity\Categorie $idCategorie)
    {
        $this->idCategorie[] = $idCategorie;

        return $this;
    }

    /**
     * Remove idCategorie
     *
     * @param \OC\projetBddBundle\Entity\Categorie $idCategorie
     */
    public function removeIdCategorie(\OC\projetBddBundle\Entity\Categorie $idCategorie)
    {
        $this->idCategorie->removeElement($idCategorie);
    }

    /**
     * Get idCategorie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Add idArticle
     *
     * @param \OC\projetBddBundle\Entity\Article $idArticle
     *
     * @return MotCle
     */
    public function addIdArticle(\OC\projetBddBundle\Entity\Article $idArticle)
    {
        $this->idArticle[] = $idArticle;

        return $this;
    }

    /**
     * Remove idArticle
     *
     * @param \OC\projetBddBundle\Entity\Article $idArticle
     */
    public function removeIdArticle(\OC\projetBddBundle\Entity\Article $idArticle)
    {
        $this->idArticle->removeElement($idArticle);
    }

    /**
     * Get idArticle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }
}

