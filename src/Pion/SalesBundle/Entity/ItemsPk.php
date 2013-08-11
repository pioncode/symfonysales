<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemsPk
 *
 * @ORM\Table(name="items_pk")
 * @ORM\Entity
 */
class ItemsPk
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="items_pk_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prod", type="string", length=7, nullable=true)
     */
    private $prod;

    /**
     * @var integer
     *
     * @ORM\Column(name="quant", type="smallint", nullable=true)
     */
    private $quant;

    /**
     * @var float
     *
     * @ORM\Column(name="val", type="decimal", nullable=true)
     */
    private $val;

    /**
     * @var integer
     *
     * @ORM\Column(name="invnum", type="integer", nullable=false)
     */
    private $invnum;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=80, nullable=true)
     */
    private $comment;



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
     * Set prod
     *
     * @param string $prod
     * @return ItemsPk
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
     * @return ItemsPk
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
     * @return ItemsPk
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
     * @return ItemsPk
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
     * @return ItemsPk
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