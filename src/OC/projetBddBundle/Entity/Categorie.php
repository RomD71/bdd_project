<?php

namespace OC\projetBddBundle\Entity;

/**
 * Categorie
 */
class Categorie
{
    /**
     * @var integer
     */
    private $idCategorie;

    /**
     * @var string
     */
    private $nomCategorie;

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
     * Get idCategorie
     *
     * @return integer
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set nomCategorie
     *
     * @param string $nomCategorie
     *
     * @return Categorie
     */
    public function setNomCategorie($nomCategorie)
    {
        $this->nomCategorie = $nomCategorie;

        return $this;
    }

    /**
     * Get nomCategorie
     *
     * @return string
     */
    public function getNomCategorie()
    {
        return $this->nomCategorie;
    }

    /**
     * Add idMotCle
     *
     * @param \OC\projetBddBundle\Entity\MotCle $idMotCle
     *
     * @return Categorie
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

