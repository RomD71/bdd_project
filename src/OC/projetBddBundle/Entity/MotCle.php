<?php

namespace OC\projetBddBundle\Entity;

/**
 * MotCle
 */
class MotCle
{
    /**
     * @var integer
     */
    private $idMotCle;

    /**
     * @var string
     */
    private $libMotCle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idCategorie;

    /**
     * @var \Doctrine\Common\Collections\Collection
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

