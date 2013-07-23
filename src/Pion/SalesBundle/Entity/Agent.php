<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agent
 */
class Agent
{
    /**
     * @var string
     */
    private $agentNo;

    /**
     * @var string
     */
    private $aname;

    /**
     * @var string
     */
    private $address1;

    /**
     * @var string
     */
    private $address2;

    /**
     * @var string
     */
    private $address3;

    /**
     * @var string
     */
    private $address4;

    /**
     * @var string
     */
    private $agCountry;

    /**
     * @var integer
     */
    private $acode;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $avatNo;


    /**
     * Set agentNo
     *
     * @param string $agentNo
     * @return Agent
     */
    public function setAgentNo($agentNo)
    {
        $this->agentNo = $agentNo;
    
        return $this;
    }

    /**
     * Get agentNo
     *
     * @return string 
     */
    public function getAgentNo()
    {
        return $this->agentNo;
    }

    /**
     * Set aname
     *
     * @param string $aname
     * @return Agent
     */
    public function setAname($aname)
    {
        $this->aname = $aname;
    
        return $this;
    }

    /**
     * Get aname
     *
     * @return string 
     */
    public function getAname()
    {
        return $this->aname;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return Agent
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    
        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return Agent
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    
        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set address3
     *
     * @param string $address3
     * @return Agent
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;
    
        return $this;
    }

    /**
     * Get address3
     *
     * @return string 
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * Set address4
     *
     * @param string $address4
     * @return Agent
     */
    public function setAddress4($address4)
    {
        $this->address4 = $address4;
    
        return $this;
    }

    /**
     * Get address4
     *
     * @return string 
     */
    public function getAddress4()
    {
        return $this->address4;
    }

    /**
     * Set agCountry
     *
     * @param string $agCountry
     * @return Agent
     */
    public function setAgCountry($agCountry)
    {
        $this->agCountry = $agCountry;
    
        return $this;
    }

    /**
     * Get agCountry
     *
     * @return string 
     */
    public function getAgCountry()
    {
        return $this->agCountry;
    }

    /**
     * Set acode
     *
     * @param integer $acode
     * @return Agent
     */
    public function setAcode($acode)
    {
        $this->acode = $acode;
    
        return $this;
    }

    /**
     * Get acode
     *
     * @return integer 
     */
    public function getAcode()
    {
        return $this->acode;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Agent
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
     * Set contact
     *
     * @param string $contact
     * @return Agent
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    
        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Agent
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Agent
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set avatNo
     *
     * @param string $avatNo
     * @return Agent
     */
    public function setAvatNo($avatNo)
    {
        $this->avatNo = $avatNo;
    
        return $this;
    }

    /**
     * Get avatNo
     *
     * @return string 
     */
    public function getAvatNo()
    {
        return $this->avatNo;
    }
}
