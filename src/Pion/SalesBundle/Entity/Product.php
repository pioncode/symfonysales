<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
{
    /**
     * @var string
     */
    private $pTemp;

    /**
     * @var string
     */
    private $pDesc;

    /**
     * @var float
     */
    private $pSterl;

    /**
     * @var float
     */
    private $pDollar;

    /**
     * @var string
     */
    private $lProd;

    /**
     * @var float
     */
    private $jdisc;

    /**
     * @var float
     */
    private $spriceA;

    /**
     * @var float
     */
    private $spriceB;

    /**
     * @var float
     */
    private $spriceC;

    /**
     * @var float
     */
    private $spriceD;

    /**
     * @var float
     */
    private $dpriceA;

    /**
     * @var float
     */
    private $dpriceB;

    /**
     * @var float
     */
    private $dpriceC;

    /**
     * @var float
     */
    private $dpriceD;

    /**
     * @var string
     */
    private $pCode;


    /**
     * Set pTemp
     *
     * @param string $pTemp
     * @return Product
     */
    public function setPTemp($pTemp)
    {
        $this->pTemp = $pTemp;
    
        return $this;
    }

    /**
     * Get pTemp
     *
     * @return string 
     */
    public function getPTemp()
    {
        return $this->pTemp;
    }

    /**
     * Set pDesc
     *
     * @param string $pDesc
     * @return Product
     */
    public function setPDesc($pDesc)
    {
        $this->pDesc = $pDesc;
    
        return $this;
    }

    /**
     * Get pDesc
     *
     * @return string 
     */
    public function getPDesc()
    {
        return $this->pDesc;
    }

    /**
     * Set pSterl
     *
     * @param float $pSterl
     * @return Product
     */
    public function setPSterl($pSterl)
    {
        $this->pSterl = $pSterl;
    
        return $this;
    }

    /**
     * Get pSterl
     *
     * @return float 
     */
    public function getPSterl()
    {
        return $this->pSterl;
    }

    /**
     * Set pDollar
     *
     * @param float $pDollar
     * @return Product
     */
    public function setPDollar($pDollar)
    {
        $this->pDollar = $pDollar;
    
        return $this;
    }

    /**
     * Get pDollar
     *
     * @return float 
     */
    public function getPDollar()
    {
        return $this->pDollar;
    }

    /**
     * Set lProd
     *
     * @param string $lProd
     * @return Product
     */
    public function setLProd($lProd)
    {
        $this->lProd = $lProd;
    
        return $this;
    }

    /**
     * Get lProd
     *
     * @return string 
     */
    public function getLProd()
    {
        return $this->lProd;
    }

    /**
     * Set jdisc
     *
     * @param float $jdisc
     * @return Product
     */
    public function setJdisc($jdisc)
    {
        $this->jdisc = $jdisc;
    
        return $this;
    }

    /**
     * Get jdisc
     *
     * @return float 
     */
    public function getJdisc()
    {
        return $this->jdisc;
    }

    /**
     * Set spriceA
     *
     * @param float $spriceA
     * @return Product
     */
    public function setSpriceA($spriceA)
    {
        $this->spriceA = $spriceA;
    
        return $this;
    }

    /**
     * Get spriceA
     *
     * @return float 
     */
    public function getSpriceA()
    {
        return $this->spriceA;
    }

    /**
     * Set spriceB
     *
     * @param float $spriceB
     * @return Product
     */
    public function setSpriceB($spriceB)
    {
        $this->spriceB = $spriceB;
    
        return $this;
    }

    /**
     * Get spriceB
     *
     * @return float 
     */
    public function getSpriceB()
    {
        return $this->spriceB;
    }

    /**
     * Set spriceC
     *
     * @param float $spriceC
     * @return Product
     */
    public function setSpriceC($spriceC)
    {
        $this->spriceC = $spriceC;
    
        return $this;
    }

    /**
     * Get spriceC
     *
     * @return float 
     */
    public function getSpriceC()
    {
        return $this->spriceC;
    }

    /**
     * Set spriceD
     *
     * @param float $spriceD
     * @return Product
     */
    public function setSpriceD($spriceD)
    {
        $this->spriceD = $spriceD;
    
        return $this;
    }

    /**
     * Get spriceD
     *
     * @return float 
     */
    public function getSpriceD()
    {
        return $this->spriceD;
    }

    /**
     * Set dpriceA
     *
     * @param float $dpriceA
     * @return Product
     */
    public function setDpriceA($dpriceA)
    {
        $this->dpriceA = $dpriceA;
    
        return $this;
    }

    /**
     * Get dpriceA
     *
     * @return float 
     */
    public function getDpriceA()
    {
        return $this->dpriceA;
    }

    /**
     * Set dpriceB
     *
     * @param float $dpriceB
     * @return Product
     */
    public function setDpriceB($dpriceB)
    {
        $this->dpriceB = $dpriceB;
    
        return $this;
    }

    /**
     * Get dpriceB
     *
     * @return float 
     */
    public function getDpriceB()
    {
        return $this->dpriceB;
    }

    /**
     * Set dpriceC
     *
     * @param float $dpriceC
     * @return Product
     */
    public function setDpriceC($dpriceC)
    {
        $this->dpriceC = $dpriceC;
    
        return $this;
    }

    /**
     * Get dpriceC
     *
     * @return float 
     */
    public function getDpriceC()
    {
        return $this->dpriceC;
    }

    /**
     * Set dpriceD
     *
     * @param float $dpriceD
     * @return Product
     */
    public function setDpriceD($dpriceD)
    {
        $this->dpriceD = $dpriceD;
    
        return $this;
    }

    /**
     * Get dpriceD
     *
     * @return float 
     */
    public function getDpriceD()
    {
        return $this->dpriceD;
    }

    /**
     * Get pCode
     *
     * @return string 
     */
    public function getPCode()
    {
        return $this->pCode;
    }
}
