<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductPk
 *
 * @ORM\Table(name="product_pk")
 * @ORM\Entity
 */
class ProductPk
{
    /**
     * @var string
     *
     * @ORM\Column(name="p_code", type="string", length=7, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="product_pk_p_code_seq", allocationSize=1, initialValue=1)
     */
    private $pCode;

    /**
     * @var string
     *
     * @ORM\Column(name="p_temp", type="string", length=80, nullable=true)
     */
    private $pTemp;

    /**
     * @var string
     *
     * @ORM\Column(name="p_desc", type="string", length=30, nullable=true)
     */
    private $pDesc;

    /**
     * @var float
     *
     * @ORM\Column(name="p_sterl", type="decimal", nullable=true)
     */
    private $pSterl;

    /**
     * @var float
     *
     * @ORM\Column(name="p_dollar", type="decimal", nullable=true)
     */
    private $pDollar;

    /**
     * @var string
     *
     * @ORM\Column(name="l_prod", type="string", length=7, nullable=true)
     */
    private $lProd;

    /**
     * @var float
     *
     * @ORM\Column(name="jdisc", type="decimal", nullable=true)
     */
    private $jdisc;

    /**
     * @var float
     *
     * @ORM\Column(name="sprice_a", type="decimal", nullable=true)
     */
    private $spriceA;

    /**
     * @var float
     *
     * @ORM\Column(name="sprice_b", type="decimal", nullable=true)
     */
    private $spriceB;

    /**
     * @var float
     *
     * @ORM\Column(name="sprice_c", type="decimal", nullable=true)
     */
    private $spriceC;

    /**
     * @var float
     *
     * @ORM\Column(name="sprice_d", type="decimal", nullable=true)
     */
    private $spriceD;

    /**
     * @var float
     *
     * @ORM\Column(name="dprice_a", type="decimal", nullable=true)
     */
    private $dpriceA;

    /**
     * @var float
     *
     * @ORM\Column(name="dprice_b", type="decimal", nullable=true)
     */
    private $dpriceB;

    /**
     * @var float
     *
     * @ORM\Column(name="dprice_c", type="decimal", nullable=true)
     */
    private $dpriceC;

    /**
     * @var float
     *
     * @ORM\Column(name="dprice_d", type="decimal", nullable=true)
     */
    private $dpriceD;



    /**
     * Get pCode
     *
     * @return string 
     */
    public function getPCode()
    {
        return $this->pCode;
    }

    /**
     * Set pTemp
     *
     * @param string $pTemp
     * @return ProductPk
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
     * @return ProductPk
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
     * @return ProductPk
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
     * @return ProductPk
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
     * @return ProductPk
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
     * @return ProductPk
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
     * @return ProductPk
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
     * @return ProductPk
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
     * @return ProductPk
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
     * @return ProductPk
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
     * @return ProductPk
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
     * @return ProductPk
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
     * @return ProductPk
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
     * @return ProductPk
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
}