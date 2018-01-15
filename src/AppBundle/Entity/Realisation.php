<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Realisation
 *
 * @ORM\Table(name="realisation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RealisationRepository")
 */
class Realisation
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
     * @ORM\Column(name="titre_realisation", type="string", length=255)
     */
    private $titreRealisation;

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
     * @ORM\Column(name="date_realisation", type="string", length=255)
     */
    private $dateRealisation;


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
     * Set titreRealisation
     *
     * @param string $titreRealisation
     *
     * @return Realisation
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
     * Set contenuRealisation
     *
     * @param string $contenuRealisation
     *
     * @return Realisation
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
     * @return Realisation
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
     * Set dateRealisation
     *
     * @param string $dateRealisation
     *
     * @return Realisation
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
}

