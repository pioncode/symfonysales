<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payfile
 */
class Payfile
{
    /**
     * @var integer
     */
    private $refno;

    /**
     * @var \DateTime
     */
    private $pdate;

    /**
     * @var string
     */
    private $pname;

    /**
     * @var string
     */
    private $chqno;

    /**
     * @var integer
     */
    private $paycurr;

    /**
     * @var float
     */
    private $payamt;

    /**
     * @var integer
     */
    private $invcurr;

    /**
     * @var float
     */
    private $invamt;

    /**
     * @var string
     */
    private $prodd;

    /**
     * @var string
     */
    private $usable;

    /**
     * @var string
     */
    private $journal;

    /**
     * @var string
     */
    private $invno;

    /**
     * @var string
     */
    private $pcomm;

    /**
     * @var string
     */
    private $account;

    /**
     * @var string
     */
    private $pcntry;


    /**
     * Set refno
     *
     * @param integer $refno
     * @return Payfile
     */
    public function setRefno($refno)
    {
        $this->refno = $refno;
    
        return $this;
    }

    /**
     * Get refno
     *
     * @return integer 
     */
    public function getRefno()
    {
        return $this->refno;
    }

    /**
     * Set pdate
     *
     * @param \DateTime $pdate
     * @return Payfile
     */
    public function setPdate($pdate)
    {
        $this->pdate = $pdate;
    
        return $this;
    }

    /**
     * Get pdate
     *
     * @return \DateTime 
     */
    public function getPdate()
    {
        return $this->pdate;
    }

    /**
     * Set pname
     *
     * @param string $pname
     * @return Payfile
     */
    public function setPname($pname)
    {
        $this->pname = $pname;
    
        return $this;
    }

    /**
     * Get pname
     *
     * @return string 
     */
    public function getPname()
    {
        return $this->pname;
    }

    /**
     * Set chqno
     *
     * @param string $chqno
     * @return Payfile
     */
    public function setChqno($chqno)
    {
        $this->chqno = $chqno;
    
        return $this;
    }

    /**
     * Get chqno
     *
     * @return string 
     */
    public function getChqno()
    {
        return $this->chqno;
    }

    /**
     * Set paycurr
     *
     * @param integer $paycurr
     * @return Payfile
     */
    public function setPaycurr($paycurr)
    {
        $this->paycurr = $paycurr;
    
        return $this;
    }

    /**
     * Get paycurr
     *
     * @return integer 
     */
    public function getPaycurr()
    {
        return $this->paycurr;
    }

    /**
     * Set payamt
     *
     * @param float $payamt
     * @return Payfile
     */
    public function setPayamt($payamt)
    {
        $this->payamt = $payamt;
    
        return $this;
    }

    /**
     * Get payamt
     *
     * @return float 
     */
    public function getPayamt()
    {
        return $this->payamt;
    }

    /**
     * Set invcurr
     *
     * @param integer $invcurr
     * @return Payfile
     */
    public function setInvcurr($invcurr)
    {
        $this->invcurr = $invcurr;
    
        return $this;
    }

    /**
     * Get invcurr
     *
     * @return integer 
     */
    public function getInvcurr()
    {
        return $this->invcurr;
    }

    /**
     * Set invamt
     *
     * @param float $invamt
     * @return Payfile
     */
    public function setInvamt($invamt)
    {
        $this->invamt = $invamt;
    
        return $this;
    }

    /**
     * Get invamt
     *
     * @return float 
     */
    public function getInvamt()
    {
        return $this->invamt;
    }

    /**
     * Set prodd
     *
     * @param string $prodd
     * @return Payfile
     */
    public function setProdd($prodd)
    {
        $this->prodd = $prodd;
    
        return $this;
    }

    /**
     * Get prodd
     *
     * @return string 
     */
    public function getProdd()
    {
        return $this->prodd;
    }

    /**
     * Set usable
     *
     * @param string $usable
     * @return Payfile
     */
    public function setUsable($usable)
    {
        $this->usable = $usable;
    
        return $this;
    }

    /**
     * Get usable
     *
     * @return string 
     */
    public function getUsable()
    {
        return $this->usable;
    }

    /**
     * Set journal
     *
     * @param string $journal
     * @return Payfile
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
     * Set invno
     *
     * @param string $invno
     * @return Payfile
     */
    public function setInvno($invno)
    {
        $this->invno = $invno;
    
        return $this;
    }

    /**
     * Get invno
     *
     * @return string 
     */
    public function getInvno()
    {
        return $this->invno;
    }

    /**
     * Set pcomm
     *
     * @param string $pcomm
     * @return Payfile
     */
    public function setPcomm($pcomm)
    {
        $this->pcomm = $pcomm;
    
        return $this;
    }

    /**
     * Get pcomm
     *
     * @return string 
     */
    public function getPcomm()
    {
        return $this->pcomm;
    }

    /**
     * Set account
     *
     * @param string $account
     * @return Payfile
     */
    public function setAccount($account)
    {
        $this->account = $account;
    
        return $this;
    }

    /**
     * Get account
     *
     * @return string 
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set pcntry
     *
     * @param string $pcntry
     * @return Payfile
     */
    public function setPcntry($pcntry)
    {
        $this->pcntry = $pcntry;
    
        return $this;
    }

    /**
     * Get pcntry
     *
     * @return string 
     */
    public function getPcntry()
    {
        return $this->pcntry;
    }
}
