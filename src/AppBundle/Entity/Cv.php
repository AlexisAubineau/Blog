<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cv
 *
 * @ORM\Table(name="cv")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CvRepository")
 */
class Cv
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
     * @ORM\Column(name="titre_diplome", type="string", length=255)
     */
    private $titreDiplome;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_diplome", type="string", length=255)
     */
    private $contenuDiplome;

    /**
     * @var string
     *
     * @ORM\Column(name="date_diplome", type="string", length=255)
     */
    private $dateDiplome;

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
     * @var string
     *
     * @ORM\Column(name="titre_certification", type="string", length=255)
     */
    private $titreCertification;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_certification", type="string", length=255)
     */
    private $contenuCertification;

    /**
     * @var string
     *
     * @ORM\Column(name="date_certification", type="string", length=255)
     */
    private $dateCertification;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_realisation", type="string", length=255)
     */
    private $titreRealisation;

    /**
     * @var string
     *
     * @ORM\Column(name="date_realisation", type="string", length=255)
     */
    private $dateRealisation;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_realisation", type="string", length=255)
     */
    private $contenuRealisation;

    /**
     * @var string
     *
     * @ORM\Column(name="url_realisation", type="string", length=255)
     */
    private $urlRealisation;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=255)
     */
    private $langue;


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
     * Set titreDiplome
     *
     * @param string $titreDiplome
     *
     * @return Cv
     */
    public function setTitreDiplome($titreDiplome)
    {
        $this->titreDiplome = $titreDiplome;

        return $this;
    }

    /**
     * Get titreDiplome
     *
     * @return string
     */
    public function getTitreDiplome()
    {
        return $this->titreDiplome;
    }

    /**
     * Set contenuDiplome
     *
     * @param string $contenuDiplome
     *
     * @return Cv
     */
    public function setContenuDiplome($contenuDiplome)
    {
        $this->contenuDiplome = $contenuDiplome;

        return $this;
    }

    /**
     * Get contenuDiplome
     *
     * @return string
     */
    public function getContenuDiplome()
    {
        return $this->contenuDiplome;
    }

    /**
     * Set dateDiplome
     *
     * @param string $dateDiplome
     *
     * @return Cv
     */
    public function setDateDiplome($dateDiplome)
    {
        $this->dateDiplome = $dateDiplome;

        return $this;
    }

    /**
     * Get dateDiplome
     *
     * @return string
     */
    public function getDateDiplome()
    {
        return $this->dateDiplome;
    }

    /**
     * Set titreCompetence
     *
     * @param string $titreCompetence
     *
     * @return Cv
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
     * @return Cv
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

    /**
     * Set titreExperience
     *
     * @param string $titreExperience
     *
     * @return Cv
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
     * @return Cv
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
     * @return Cv
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

    /**
     * Set titreCertification
     *
     * @param string $titreCertification
     *
     * @return Cv
     */
    public function setTitreCertification($titreCertification)
    {
        $this->titreCertification = $titreCertification;

        return $this;
    }

    /**
     * Get titreCertification
     *
     * @return string
     */
    public function getTitreCertification()
    {
        return $this->titreCertification;
    }

    /**
     * Set contenuCertification
     *
     * @param string $contenuCertification
     *
     * @return Cv
     */
    public function setContenuCertification($contenuCertification)
    {
        $this->contenuCertification = $contenuCertification;

        return $this;
    }

    /**
     * Get contenuCertification
     *
     * @return string
     */
    public function getContenuCertification()
    {
        return $this->contenuCertification;
    }

    /**
     * Set dateCertification
     *
     * @param string $dateCertification
     *
     * @return Cv
     */
    public function setDateCertification($dateCertification)
    {
        $this->dateCertification = $dateCertification;

        return $this;
    }

    /**
     * Get dateCertification
     *
     * @return string
     */
    public function getDateCertification()
    {
        return $this->dateCertification;
    }

    /**
     * Set titreRealisation
     *
     * @param string $titreRealisation
     *
     * @return Cv
     */
    public function setTitreRealisation($titreRealisation)
    {
        $this->titreRealisation = $titreRealisation;

        return $this;
    }

    /**
     * Get titreRealisation
     *
     * @return string
     */
    public function getTitreRealisation()
    {
        return $this->titreRealisation;
    }

    /**
     * Set dateRealisation
     *
     * @param string $dateRealisation
     *
     * @return Cv
     */
    public function setDateRealisation($dateRealisation)
    {
        $this->dateRealisation = $dateRealisation;

        return $this;
    }

    /**
     * Get dateRealisation
     *
     * @return string
     */
    public function getDateRealisation()
    {
        return $this->dateRealisation;
    }

    /**
     * Set contenuRealisation
     *
     * @param string $contenuRealisation
     *
     * @return Cv
     */
    public function setContenuRealisation($contenuRealisation)
    {
        $this->contenuRealisation = $contenuRealisation;

        return $this;
    }

    /**
     * Get contenuRealisation
     *
     * @return string
     */
    public function getContenuRealisation()
    {
        return $this->contenuRealisation;
    }

    /**
     * Set urlRealisation
     *
     * @param string $urlRealisation
     *
     * @return Cv
     */
    public function setUrlRealisation($urlRealisation)
    {
        $this->urlRealisation = $urlRealisation;

        return $this;
    }

    /**
     * Get urlRealisation
     *
     * @return string
     */
    public function getUrlRealisation()
    {
        return $this->urlRealisation;
    }

    /**
     * Set langue
     *
     * @param string $langue
     *
     * @return Cv
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string
     */
    public function getLangue()
    {
        return $this->langue;
    }
}

