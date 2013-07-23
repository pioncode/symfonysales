<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marketing
 */
class Marketing
{
    /**
     * @var integer
     */
    private $subsYear;

    /**
     * @var string
     */
    private $prod;

    /**
     * @var integer
     */
    private $client;

    /**
     * @var string
     */
    private $country;

    /**
     * @var integer
     */
    private $ccode;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $addr1;

    /**
     * @var integer
     */
    private $key;


    /**
     * Set subsYear
     *
     * @param integer $subsYear
     * @return Marketing
     */
    public function setSubsYear($subsYear)
    {
        $this->subsYear = $subsYear;
    
        return $this;
    }

    /**
     * Get subsYear
     *
     * @return integer 
     */
    public function getSubsYear()
    {
        return $this->subsYear;
    }

    /**
     * Set prod
     *
     * @param string $prod
     * @return Marketing
     */
    public function setProd($prod)
    {
        $this->prod = $prod;
    
        return $this;
    }

    /**
     * Get prod
     *
     * @return string 
     */
    public function getProd()
    {
        return $this->prod;
    }

    /**
     * Set client
     *
     * @param integer $client
     * @return Marketing
     */
    public function setClient($client)
    {
        $this->client = $client;
    
        return $this;
    }

    /**
     * Get client
     *
     * @return integer 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Marketing
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set ccode
     *
     * @param integer $ccode
     * @return Marketing
     */
    public function setCcode($ccode)
    {
        $this->ccode = $ccode;
    
        return $this;
    }

    /**
     * Get ccode
     *
     * @return integer 
     */
    public function getCcode()
    {
        return $this->ccode;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Marketing
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
     * Set addr1
     *
     * @param string $addr1
     * @return Marketing
     */
    public function setAddr1($addr1)
    {
        $this->addr1 = $addr1;
    
        return $this;
    }

    /**
     * Get addr1
     *
     * @return string 
     */
    public function getAddr1()
    {
        return $this->addr1;
    }

    /**
     * Set key
     *
     * @param integer $key
     * @return Marketing
     */
    public function setKey($key)
    {
        $this->key = $key;
    
        return $this;
    }

    /**
     * Get key
     *
     * @return integer 
     */
    public function getKey()
    {
        return $this->key;
    }
}
