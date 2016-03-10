<?php

namespace Hackathon\CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Hackathon\CoreBundle\Entity\PlaceType;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * Place
 * @ExclusionPolicy("none")
 * @ORM\Table(name="place")
 * @ORM\Entity(repositoryClass="Hackathon\CoreBundle\Repository\PlaceRepository")
 */
class Place
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
     * @ORM\Column(name="address", type="string", length=255, unique=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=true)
     */
    private $tel;

    /**
     * @var integer
     *
     * @ORM\Column(name="latitude", type="float", nullable=true)
     */
    private $latitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="longitude", type="float", nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="urlSite", type="string", length=255, nullable=true)
     */
    private $urlSite;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumn(name="hotel_id", referencedColumnName="id")
     */
    private $hotel;

    /**
     * @ORM\ManyToOne(targetEntity="PlaceType")
     * @ORM\JoinColumn(name="place_type_id", referencedColumnName="id")
     */
    private $placeType;

    /**
     * @ORM\OneToMany(targetEntity="Avis", mappedBy="place")
     */
    private $avis;

    public function __construct() {
        $this->avis = new ArrayCollection();
    }

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
     * Set address
     *
     * @param string $address
     * @return Place
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Place
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Place
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set urlSite
     *
     * @param string $urlSite
     * @return Place
     */
    public function setUrlSite($urlSite)
    {
        $this->urlSite = $urlSite;

        return $this;
    }

    /**
     * Get urlSite
     *
     * @return string 
     */
    public function getUrlSite()
    {
        return $this->urlSite;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Place
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set hotel
     *
     * @param \Hackathon\CoreBundle\Entity\Hotel $hotel
     * @return Place
     */
    public function setHotel(Hotel $hotel = null)
    {
        $this->hotel = $hotel;

        return $this;
    }

    /**
     * Get hotel
     *
     * @return \Hackathon\CoreBundle\Entity\Hotel
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Set placeType
     *
     * @param \Hackathon\CoreBundle\Entity\PlaceType $placeType
     * @return Place
     */
    public function setPlaceType(PlaceType $placeType = null)
    {
        $this->placeType = $placeType;

        return $this;
    }

    /**
     * Get placeType
     *
     * @return \Hackathon\CoreBundle\Entity\PlaceType 
     */
    public function getPlaceType()
    {
        return $this->placeType;
    }

    /**
     * Remove avis
     *
     * @param \Hackathon\CoreBundle\Entity\Place $avis
     */
    public function removeAvi(Place $avis)
    {
        $this->avis->removeElement($avis);
    }

    /**
     * Add avis
     *
     * @param \Hackathon\CoreBundle\Entity\Avis $avis
     * @return Place
     */
    public function addAvi(Avis $avis)
    {
        $this->avis[] = $avis;

        return $this;
    }

    /**
     * Get avis
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAvis()
    {
        return $this->avis;
    }

    /**
     * Set latitude
     *
     * @param integer $latitude
     * @return Place
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return integer 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param integer $longitude
     * @return Place
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return integer 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}
