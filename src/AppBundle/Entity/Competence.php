<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table(name="competence")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompetenceRepository")
 */
class Competence
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_competence", type="string", length=255)
     */
    private $titreCompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_competence", type="string", length=255)
     */
    private $niveauCompetence;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titreCompetence
     *
     * @param string $titreCompetence
     *
     * @return Competence
     */
    public function setTitreCompetence($titreCompetence)
    {
        $this->titreCompetence = $titreCompetence;

        return $this;
    }

    /**
     * Get titreCompetence
     *
     * @return string
     */
    public function getTitreCompetence()
    {
        return $this->titreCompetence;
    }

    /**
     * Set niveauCompetence
     *
     * @param string $niveauCompetence
     *
     * @return Competence
     */
    public function setNiveauCompetence($niveauCompetence)
    {
        $this->niveauCompetence = $niveauCompetence;

        return $this;
    }

    /**
     * Get niveauCompetence
     *
     * @return string
     */
    public function getNiveauCompetence()
    {
        return $this->niveauCompetence;
    }
}

