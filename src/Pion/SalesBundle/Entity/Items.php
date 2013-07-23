<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 */
class Items
{
    /**
     * @var string
     */
    private $prod;

    /**
     * @var integer
     */
    private $quant;

    /**
     * @var float
     */
    private $val;

    /**
     * @var integer
     */
    private $invnum;

    /**
     * @var string
     */
    private $comment;


    /**
     * Set prod
     *
     * @param string $prod
     * @return Items
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
     * Set quant
     *
     * @param integer $quant
     * @return Items
     */
    public function setQuant($quant)
    {
        $this->quant = $quant;
    
        return $this;
    }

    /**
     * Get quant
     *
     * @return integer 
     */
    public function getQuant()
    {
        return $this->quant;
    }

    /**
     * Set val
     *
     * @param float $val
     * @return Items
     */
    public function setVal($val)
    {
        $this->val = $val;
    
        return $this;
    }

    /**
     * Get val
     *
     * @return float 
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * Set invnum
     *
     * @param integer $invnum
     * @return Items
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
     * Set comment
     *
     * @param string $comment
     * @return Items
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
