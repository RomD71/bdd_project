<?php

namespace OC\projetBddBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * Fichier
 * @ORM\Table(name="fichier")
 * @ORM\Entity(repositoryClass="OC\projetBddBundle\Repository\fichierRepository")
 *
 */
class Fichier
{
    /**
     * @var integer
     * @ORM\Column(name="id_Fichier", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFichier;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_Fichier", type="string")
     */
    private $nomFichier;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string")
     */
    private $type;


    /**
     * Get idFichier
     *
     * @return integer
     */
    public function getIdFichier()
    {
        return $this->idFichier;
    }

    /**
     * Set nomFichier
     *
     * @param string $nomFichier
     *
     * @return Fichier
     */
    public function setNomFichier($nomFichier)
    {
        $this->nomFichier = $nomFichier;

        return $this;
    }

    /**
     * Get nomFichier
     *
     * @return string
     */
    public function getNomFichier()
    {
        return $this->nomFichier;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Fichier
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

