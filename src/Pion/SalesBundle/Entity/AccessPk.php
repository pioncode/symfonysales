<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessPk
 *
 * @ORM\Table(name="access_pk")
 * @ORM\Entity
 */
class AccessPk
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="access_pk_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_refno", type="integer", nullable=false)
     */
    private $clientRefno;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=25, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="deny", type="string", nullable=true)
     */
    private $deny;



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
     * Set clientRefno
     *
     * @param integer $clientRefno
     * @return AccessPk
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
     * Set ip
     *
     * @param string $ip
     * @return AccessPk
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set deny
     *
     * @param string $deny
     * @return AccessPk
     */
    public function setDeny($deny)
    {
        $this->deny = $deny;
    
        return $this;
    }

    /**
     * Get deny
     *
     * @return string 
     */
    public function getDeny()
    {
        return $this->deny;
    }
}