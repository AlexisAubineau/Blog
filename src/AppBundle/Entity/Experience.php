<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExperienceRepository")
 */
class Experience
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
     * @ORM\Column(name="titre_experience", type="string", length=255)
     */
    private $titreExperience;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_experience", type="string", length=255)
     */
    private $contenuExperience;

    /**
     * @var string
     *
     * @ORM\Column(name="date_experience", type="string", length=255)
     */
    private $dateExperience;


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
     * Set titreExperience
     *
     * @param string $titreExperience
     *
     * @return Experience
     */
    public function setTitreExperience($titreExperience)
    {
        $this->titreExperience = $titreExperience;

        return $this;
    }

    /**
     * Get titreExperience
     *
     * @return string
     */
    public function getTitreExperience()
    {
        return $this->titreExperience;
    }

    /**
     * Set contenuExperience
     *
     * @param string $contenuExperience
     *
     * @return Experience
     */
    public function setContenuExperience($contenuExperience)
    {
        $this->contenuExperience = $contenuExperience;

        return $this;
    }

    /**
     * Get contenuExperience
     *
     * @return string
     */
    public function getContenuExperience()
    {
        return $this->contenuExperience;
    }

    /**
     * Set dateExperience
     *
     * @param string $dateExperience
     *
     * @return Experience
     */
    public function setDateExperience($dateExperience)
    {
        $this->dateExperience = $dateExperience;

        return $this;
    }

    /**
     * Get dateExperience
     *
     * @return string
     */
    public function getDateExperience()
    {
        return $this->dateExperience;
    }
}

