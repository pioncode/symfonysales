<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessBak
 */
class AccessBak
{
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
     * Set clientRefno
     *
     * @param integer $clientRefno
     * @return AccessBak
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
     * @return AccessBak
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
     * @return AccessBak
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
