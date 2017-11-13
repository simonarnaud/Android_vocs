<?php

namespace VOCS\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schools
 *
 * @ORM\Table(name="schools")
 * @ORM\Entity
 *  * @ORM\Entity(repositoryClass="VOCS\PlatformBundle\Repository\SchoolsRepository")

 */
class Schools
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="uai", type="string", length=8, nullable=false)
     */
    private $uai;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=49, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=110, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="sigle", type="string", length=15, nullable=true)
     */
    private $sigle;

    /**
     * @var string
     *
     * @ORM\Column(name="universite", type="string", length=57, nullable=true)
     */
    private $universite;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=26, nullable=false)
     */
    private $commune;

    /**
     * @var string
     *
     * @ORM\Column(name="communeCog", type="string", length=13, nullable=false)
     */
    private $communecog;

    /**
     * @var string
     *
     * @ORM\Column(name="cedex", type="string", length=14, nullable=true)
     */
    private $cedex;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=32, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="arrondissement", type="string", length=15, nullable=true)
     */
    private $arrondissement;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=23, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="academie", type="string", length=25, nullable=false)
     */
    private $academie;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=26, nullable=false)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="regionCog", type="string", length=23, nullable=true)
     */
    private $regioncog;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=17, nullable=false)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=16, nullable=false)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=255, nullable=false)
     */
    private $lien;


    /**
     *
     * @ORM\OneToMany(targetEntity="Classes", mappedBy="school")
     */
    private $classes;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set uai
     *
     * @param string $uai
     *
     * @return Schools
     */
    public function setUai($uai)
    {
        $this->uai = $uai;

        return $this;
    }

    /**
     * Get uai
     *
     * @return string
     */
    public function getUai()
    {
        return $this->uai;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Schools
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

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Schools
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set sigle
     *
     * @param string $sigle
     *
     * @return Schools
     */
    public function setSigle($sigle)
    {
        $this->sigle = $sigle;

        return $this;
    }

    /**
     * Get sigle
     *
     * @return string
     */
    public function getSigle()
    {
        return $this->sigle;
    }

    /**
     * Set universite
     *
     * @param string $universite
     *
     * @return Schools
     */
    public function setUniversite($universite)
    {
        $this->universite = $universite;

        return $this;
    }

    /**
     * Get universite
     *
     * @return string
     */
    public function getUniversite()
    {
        return $this->universite;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Schools
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set commune
     *
     * @param string $commune
     *
     * @return Schools
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set communecog
     *
     * @param string $communecog
     *
     * @return Schools
     */
    public function setCommunecog($communecog)
    {
        $this->communecog = $communecog;

        return $this;
    }

    /**
     * Get communecog
     *
     * @return string
     */
    public function getCommunecog()
    {
        return $this->communecog;
    }

    /**
     * Set cedex
     *
     * @param string $cedex
     *
     * @return Schools
     */
    public function setCedex($cedex)
    {
        $this->cedex = $cedex;

        return $this;
    }

    /**
     * Get cedex
     *
     * @return string
     */
    public function getCedex()
    {
        return $this->cedex;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Schools
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set arrondissement
     *
     * @param string $arrondissement
     *
     * @return Schools
     */
    public function setArrondissement($arrondissement)
    {
        $this->arrondissement = $arrondissement;

        return $this;
    }

    /**
     * Get arrondissement
     *
     * @return string
     */
    public function getArrondissement()
    {
        return $this->arrondissement;
    }

    /**
     * Set department
     *
     * @param string $department
     *
     * @return Schools
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set academie
     *
     * @param string $academie
     *
     * @return Schools
     */
    public function setAcademie($academie)
    {
        $this->academie = $academie;

        return $this;
    }

    /**
     * Get academie
     *
     * @return string
     */
    public function getAcademie()
    {
        return $this->academie;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Schools
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set regioncog
     *
     * @param string $regioncog
     *
     * @return Schools
     */
    public function setRegioncog($regioncog)
    {
        $this->regioncog = $regioncog;

        return $this;
    }

    /**
     * Get regioncog
     *
     * @return string
     */
    public function getRegioncog()
    {
        return $this->regioncog;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Schools
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Schools
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set lien
     *
     * @param string $lien
     *
     * @return Schools
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string
     */
    public function getLien()
    {
        return $this->lien;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add class
     *
     * @param \VOCS\PlatformBundle\Entity\Classes $class
     *
     * @return Schools
     */
    public function addClass(\VOCS\PlatformBundle\Entity\Classes $class)
    {
        $this->classes[] = $class;

        return $this;
    }

    /**
     * Remove class
     *
     * @param \VOCS\PlatformBundle\Entity\Classes $class
     */
    public function removeClass(\VOCS\PlatformBundle\Entity\Classes $class)
    {
        $this->classes->removeElement($class);
    }

    /**
     * Get classes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClasses()
    {
        return $this->classes;
    }

    function __toString()
    {
        return $this->nom;
    }
}
