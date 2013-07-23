<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Access2
 */
class Access2
{
    /**
     * @var integer
     */
    private $pkey;

    /**
     * @var integer
     */
    private $clientRefno;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $deny;


    /**
     * Set pkey
     *
     * @param integer $pkey
     * @return Access2
     */
    public function setPkey($pkey)
    {
        $this->pkey = $pkey;
    
        return $this;
    }

    /**
     * Get pkey
     *
     * @return integer 
     */
    public function getPkey()
    {
        return $this->pkey;
    }

    /**
     * Set clientRefno
     *
     * @param integer $clientRefno
     * @return Access2
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
     * @return Access2
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
     * @return Access2
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
