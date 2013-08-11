<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgentPk
 *
 * @ORM\Table(name="agent_pk")
 * @ORM\Entity
 */
class AgentPk
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="agent_pk_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_no", type="string", nullable=false)
     */
    private $agentNo;

    /**
     * @var string
     *
     * @ORM\Column(name="aname", type="string", length=50, nullable=true)
     */
    private $aname;

    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="string", length=80, nullable=true)
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="address2", type="string", length=80, nullable=true)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="address3", type="string", length=80, nullable=true)
     */
    private $address3;

    /**
     * @var string
     *
     * @ORM\Column(name="address4", type="string", length=80, nullable=true)
     */
    private $address4;

    /**
     * @var string
     *
     * @ORM\Column(name="ag_country", type="string", length=50, nullable=true)
     */
    private $agCountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="acode", type="smallint", nullable=true)
     */
    private $acode;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=30, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=80, nullable=true)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=30, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="avat_no", type="string", length=20, nullable=true)
     */
    private $avatNo;



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
     * Set agentNo
     *
     * @param string $agentNo
     * @return AgentPk
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
     * @return AgentPk
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
     * @return AgentPk
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
     * @return AgentPk
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
     * @return AgentPk
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
     * @return AgentPk
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
     * @return AgentPk
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
     * @return AgentPk
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
     * @return AgentPk
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
     * @return AgentPk
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
     * @return AgentPk
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
     * @return AgentPk
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
     * @return AgentPk
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