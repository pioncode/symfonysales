<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Claims
 */
class Claims
{
    /**
     * @var integer
     */
    private $claimcount;

    /**
     * @var integer
     */
    private $invnum;

    /**
     * @var string
     */
    private $journal;

    /**
     * @var string
     */
    private $volume;

    /**
     * @var string
     */
    private $issue;

    /**
     * @var \DateTime
     */
    private $claimdate;

    /**
     * @var string
     */
    private $response;

    /**
     * @var string
     */
    private $comment;


    /**
     * Set claimcount
     *
     * @param integer $claimcount
     * @return Claims
     */
    public function setClaimcount($claimcount)
    {
        $this->claimcount = $claimcount;
    
        return $this;
    }

    /**
     * Get claimcount
     *
     * @return integer 
     */
    public function getClaimcount()
    {
        return $this->claimcount;
    }

    /**
     * Set invnum
     *
     * @param integer $invnum
     * @return Claims
     */
    public function setInvnum($invnum)
    {
        $this->invnum = $invnum;
    
        return $this;
    }

    /**
     * Get invnum
     *
     * @return integer 
     */
    public function getInvnum()
    {
        return $this->invnum;
    }

    /**
     * Set journal
     *
     * @param string $journal
     * @return Claims
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
     * @param string $volume
     * @return Claims
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    
        return $this;
    }

    /**
     * Get volume
     *
     * @return string 
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set issue
     *
     * @param string $issue
     * @return Claims
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;
    
        return $this;
    }

    /**
     * Get issue
     *
     * @return string 
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * Set claimdate
     *
     * @param \DateTime $claimdate
     * @return Claims
     */
    public function setClaimdate($claimdate)
    {
        $this->claimdate = $claimdate;
    
        return $this;
    }

    /**
     * Get claimdate
     *
     * @return \DateTime 
     */
    public function getClaimdate()
    {
        return $this->claimdate;
    }

    /**
     * Set response
     *
     * @param string $response
     * @return Claims
     */
    public function setResponse($response)
    {
        $this->response = $response;
    
        return $this;
    }

    /**
     * Get response
     *
     * @return string 
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Claims
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
}
