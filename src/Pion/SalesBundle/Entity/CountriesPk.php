<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CountriesPk
 *
 * @ORM\Table(name="countries_pk")
 * @ORM\Entity
 */
class CountriesPk
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="countries_pk_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="country_name", type="string", length=50, nullable=true)
     */
    private $countryName;

    /**
     * @var integer
     *
     * @ORM\Column(name="country_code", type="smallint", nullable=false)
     */
    private $countryCode;



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
     * Set countryName
     *
     * @param string $countryName
     * @return CountriesPk
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
    
        return $this;
    }

    /**
     * Get countryName
     *
     * @return string 
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Set countryCode
     *
     * @param integer $countryCode
     * @return CountriesPk
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    
        return $this;
    }

    /**
     * Get countryCode
     *
     * @return integer 
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
}