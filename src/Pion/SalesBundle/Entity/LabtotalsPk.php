<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabtotalsPk
 *
 * @ORM\Table(name="labtotals_pk")
 * @ORM\Entity
 */
class LabtotalsPk
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="labtotals_pk_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", nullable=false)
     */
    private $journal;

    /**
     * @var integer
     *
     * @ORM\Column(name="volume", type="smallint", nullable=false)
     */
    private $volume;

    /**
     * @var integer
     *
     * @ORM\Column(name="issue", type="smallint", nullable=false)
     */
    private $issue;

    /**
     * @var integer
     *
     * @ORM\Column(name="zone", type="smallint", nullable=true)
     */
    private $zone;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="smallint", nullable=true)
     */
    private $total;



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
     * Set journal
     *
     * @param string $journal
     * @return LabtotalsPk
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
     * @return LabtotalsPk
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
     * @return LabtotalsPk
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
     * @return LabtotalsPk
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
     * @return LabtotalsPk
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