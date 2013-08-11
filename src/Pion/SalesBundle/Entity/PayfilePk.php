<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PayfilePk
 *
 * @ORM\Table(name="payfile_pk")
 * @ORM\Entity
 */
class PayfilePk
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="payfile_pk_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="refno", type="integer", nullable=false)
     */
    private $refno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pdate", type="date", nullable=true)
     */
    private $pdate;

    /**
     * @var string
     *
     * @ORM\Column(name="pname", type="string", length=30, nullable=true)
     */
    private $pname;

    /**
     * @var string
     *
     * @ORM\Column(name="chqno", type="string", length=20, nullable=true)
     */
    private $chqno;

    /**
     * @var integer
     *
     * @ORM\Column(name="paycurr", type="smallint", nullable=true)
     */
    private $paycurr;

    /**
     * @var float
     *
     * @ORM\Column(name="payamt", type="decimal", nullable=true)
     */
    private $payamt;

    /**
     * @var integer
     *
     * @ORM\Column(name="invcurr", type="smallint", nullable=true)
     */
    private $invcurr;

    /**
     * @var float
     *
     * @ORM\Column(name="invamt", type="decimal", nullable=true)
     */
    private $invamt;

    /**
     * @var string
     *
     * @ORM\Column(name="prodd", type="string", length=10, nullable=true)
     */
    private $prodd;

    /**
     * @var string
     *
     * @ORM\Column(name="usable", type="string", nullable=true)
     */
    private $usable;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string", nullable=true)
     */
    private $journal;

    /**
     * @var string
     *
     * @ORM\Column(name="invno", type="string", length=40, nullable=true)
     */
    private $invno;

    /**
     * @var string
     *
     * @ORM\Column(name="pcomm", type="string", length=80, nullable=true)
     */
    private $pcomm;

    /**
     * @var string
     *
     * @ORM\Column(name="account", type="string", nullable=true)
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="pcntry", type="string", nullable=true)
     */
    private $pcntry;



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
     * Set refno
     *
     * @param integer $refno
     * @return PayfilePk
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
     * @return PayfilePk
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
     * @return PayfilePk
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
     * @return PayfilePk
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
     * @return PayfilePk
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
     * @return PayfilePk
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
     * @return PayfilePk
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
     * @return PayfilePk
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
     * @return PayfilePk
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
     * @return PayfilePk
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
     * @return PayfilePk
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
     * @return PayfilePk
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
     * @return PayfilePk
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
     * @return PayfilePk
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
     * @return PayfilePk
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