<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diplome
 *
 * @ORM\Table(name="diplome")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DiplomeRepository")
 */
class Diplome
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
     * @ORM\Column(name="ecole_diplome", type="string", length=255)
     */
    private $ecoleDiplome;

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
     * @return Diplome
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
     * Set ecoleDiplome
     *
     * @param string $ecoleDiplome
     *
     * @return Diplome
     */
    public function setEcoleDiplome($ecoleDiplome)
    {
        $this->ecoleDiplome = $ecoleDiplome;

        return $this;
    }

    /**
     * Get ecoleDiplome
     *
     * @return string
     */
    public function getEcoleDiplome()
    {
        return $this->ecoleDiplome;
    }

    /**
     * Set contenuDiplome
     *
     * @param string $contenuDiplome
     *
     * @return Diplome
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
     * @return Diplome
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
}

