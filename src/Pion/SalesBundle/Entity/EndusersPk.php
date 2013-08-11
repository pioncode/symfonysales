<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EndusersPk
 *
 * @ORM\Table(name="endusers_pk")
 * @ORM\Entity
 */
class EndusersPk
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="endusers_pk_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_ref", type="string", length=50, nullable=false)
     */
    private $agentRef;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_refno", type="integer", nullable=true)
     */
    private $clientRefno;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="string", length=100, nullable=true)
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="address2", type="string", length=100, nullable=true)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="address3", type="string", length=100, nullable=true)
     */
    private $address3;

    /**
     * @var string
     *
     * @ORM\Column(name="address4", type="string", length=100, nullable=true)
     */
    private $address4;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=50, nullable=true)
     */
    private $country;



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
     * Set agentRef
     *
     * @param string $agentRef
     * @return EndusersPk
     */
    public function setAgentRef($agentRef)
    {
        $this->agentRef = $agentRef;
    
        return $this;
    }

    /**
     * Get agentRef
     *
     * @return string 
     */
    public function getAgentRef()
    {
        return $this->agentRef;
    }

    /**
     * Set clientRefno
     *
     * @param integer $clientRefno
     * @return EndusersPk
     */
    public function setClientRefno($clientRefno)
    {
        $this->clientRefno = $clientRefno;
    
        return $this;
    }

    /**
     * Get clientRefno
     *
     * @return integer 
     */
    public function getClientRefno()
    {
        return $this->clientRefno;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return EndusersPk
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
     * Set address1
     *
     * @param string $address1
     * @return EndusersPk
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
     * @return EndusersPk
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
     * @return EndusersPk
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
     * @return EndusersPk
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
     * Set country
     *
     * @param string $country
     * @return EndusersPk
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
}