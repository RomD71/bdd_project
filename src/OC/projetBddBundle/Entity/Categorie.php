<?php

namespace OC\projetBddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * Categorie
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="OC\projetBddBundle\Repository\categorieRepository")
 *
 */
class Categorie
{
    /**
     * @var integer
     * @ORM\Column(name="id_Categorie", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_Categorie", type="string")
     */
    private $nomCategorie;

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

