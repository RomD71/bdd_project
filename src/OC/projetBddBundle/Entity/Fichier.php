<?php

namespace OC\projetBddBundle\Entity;

/**
 * Fichier
 */
class Fichier
{
    /**
     * @var integer
     */
    private $idFichier;

    /**
     * @var string
     */
    private $nomFichier;

    /**
     * @var string
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

