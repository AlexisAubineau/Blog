<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certification
 *
 * @ORM\Table(name="certification")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CertificationRepository")
 */
class Certification
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titreCertification
     *
     * @param string $titreCertification
     *
     * @return Certification
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
     * @return Certification
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
     * @return Certification
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
}

