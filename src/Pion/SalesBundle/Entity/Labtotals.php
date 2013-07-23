<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Labtotals
 */
class Labtotals
{
    /**
     * @var string
     */
    private $journal;

    /**
     * @var integer
     */
    private $volume;

    /**
     * @var integer
     */
    private $issue;

    /**
     * @var integer
     */
    private $zone;

    /**
     * @var integer
     */
    private $total;


    /**
     * Set journal
     *
     * @param string $journal
     * @return Labtotals
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;
    
        return $this;
    }

    /**
     * Get journal
     *
     * @return string 
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * Set volume
     *
     * @param integer $volume
     * @return Labtotals
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    
        return $this;
    }

    /**
     * Get volume
     *
     * @return integer 
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set issue
     *
     * @param integer $issue
     * @return Labtotals
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;
    
        return $this;
    }

    /**
     * Get issue
     *
     * @return integer 
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * Set zone
     *
     * @param integer $zone
     * @return Labtotals
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    
        return $this;
    }

    /**
     * Get zone
     *
     * @return integer 
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return Labtotals
     */
    public function setTotal($total)
    {
        $this->total = $total;
    
        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }
}
