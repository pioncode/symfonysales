<?php
/**
 * All DateTime objects converted to strings as HYDRATION not working in Doctrine
 * and ending up with array and DateTime object mess
 * Changed all DateTime to strings here
 */

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransactionPk
 *
 * @ORM\Table(name="transaction_pk")
 * @ORM\Entity
 */
class TransactionPk
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="transaction_pk_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="invnum", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="transaction_pk_pkey", allocationSize=1, initialValue=1)
     */
    private $invnum;

    /**
     * @var integer
     *
     * @ORM\Column(name="client", type="smallint", nullable=true)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="ordnum", type="string", length=60, nullable=true)
     */
    private $ordnum;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency", type="integer", nullable=true)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="stand", type="string", nullable=true)
     */
    private $stand;

    /**
     * @var date string
     *
     * @ORM\Column(name="invdate", type="string", nullable=true)
     */
    private $invdate;

    /**
     * @var date string
     *
     * @ORM\Column(name="paydate", type="string", nullable=true)
     */
    private $paydate;

    /**
     * @var float
     *
     * @ORM\Column(name="refund", type="decimal", nullable=true)
     */
    private $refund;

    /**
     * @var float
     *
     * @ORM\Column(name="balance", type="decimal", nullable=true)
     */
    private $balance;

    /**
     * @var integer
     *
     * @ORM\Column(name="payflag", type="integer", nullable=true)
     */
    private $payflag;

    /**
     * @var string
     *
     * @ORM\Column(name="cheqnum", type="string", length=30, nullable=true)
     */
    private $cheqnum;

    /**
     * @var float
     *
     * @ORM\Column(name="inamount", type="decimal", nullable=true)
     */
    private $inamount;

    /**
     * @var float
     *
     * @ORM\Column(name="tmpamt", type="decimal", nullable=true)
     */
    private $tmpamt;

    /**
     * @var date string
     *
     * @ORM\Column(name="tmpdate", type="string", nullable=true)
     */
    private $tmpdate;

    /**
     * @var float
     *
     * @ORM\Column(name="gross", type="decimal", nullable=false)
     */
    private $gross;

    /**
     * @var float
     *
     * @ORM\Column(name="nettotal", type="decimal", nullable=false)
     */
    private $nettotal;

    /**
     * @var float
     *
     * @ORM\Column(name="discount", type="float", nullable=true)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="prod1", type="string", length=7, nullable=true)
     */
    private $prod1;

    /**
     * @var string
     *
     * @ORM\Column(name="prod2", type="string", length=7, nullable=true)
     */
    private $prod2;

    /**
     * @var string
     *
     * @ORM\Column(name="prod3", type="string", length=7, nullable=true)
     */
    private $prod3;

    /**
     * @var string
     *
     * @ORM\Column(name="prod4", type="string", length=7, nullable=true)
     */
    private $prod4;

    /**
     * @var string
     *
     * @ORM\Column(name="prod5", type="string", length=7, nullable=true)
     */
    private $prod5;

    /**
     * @var string
     *
     * @ORM\Column(name="prod6", type="string", length=7, nullable=true)
     */
    private $prod6;

    /**
     * @var string
     *
     * @ORM\Column(name="tdesc1", type="string", length=50, nullable=true)
     */
    private $tdesc1;

    /**
     * @var string
     *
     * @ORM\Column(name="tdesc2", type="string", length=50, nullable=true)
     */
    private $tdesc2;

    /**
     * @var string
     *
     * @ORM\Column(name="tdesc3", type="string", length=50, nullable=true)
     */
    private $tdesc3;

    /**
     * @var string
     *
     * @ORM\Column(name="tdesc4", type="string", length=50, nullable=true)
     */
    private $tdesc4;

    /**
     * @var string
     *
     * @ORM\Column(name="tdesc5", type="string", length=50, nullable=true)
     */
    private $tdesc5;

    /**
     * @var string
     *
     * @ORM\Column(name="tdesc6", type="string", length=50, nullable=true)
     */
    private $tdesc6;

    /**
     * @var integer
     *
     * @ORM\Column(name="quant1", type="integer", nullable=true)
     */
    private $quant1;

    /**
     * @var integer
     *
     * @ORM\Column(name="quant2", type="integer", nullable=true)
     */
    private $quant2;

    /**
     * @var integer
     *
     * @ORM\Column(name="quant3", type="integer", nullable=true)
     */
    private $quant3;

    /**
     * @var integer
     *
     * @ORM\Column(name="quant4", type="integer", nullable=true)
     */
    private $quant4;

    /**
     * @var integer
     *
     * @ORM\Column(name="quant5", type="integer", nullable=true)
     */
    private $quant5;

    /**
     * @var integer
     *
     * @ORM\Column(name="quant6", type="integer", nullable=true)
     */
    private $quant6;

    /**
     * @var float
     *
     * @ORM\Column(name="val1", type="decimal", nullable=true)
     */
    private $val1;

    /**
     * @var float
     *
     * @ORM\Column(name="val2", type="decimal", nullable=true)
     */
    private $val2;

    /**
     * @var float
     *
     * @ORM\Column(name="val3", type="decimal", nullable=true)
     */
    private $val3;

    /**
     * @var float
     *
     * @ORM\Column(name="val4", type="decimal", nullable=true)
     */
    private $val4;

    /**
     * @var float
     *
     * @ORM\Column(name="val5", type="decimal", nullable=true)
     */
    private $val5;

    /**
     * @var float
     *
     * @ORM\Column(name="val6", type="decimal", nullable=true)
     */
    private $val6;

    /**
     * @var string
     *
     * @ORM\Column(name="comm", type="string", length=80, nullable=true)
     */
    private $comm;

    /**
     * @var string
     *
     * @ORM\Column(name="comment1", type="string", length=80, nullable=true)
     */
    private $comment1;

    /**
     * @var string
     *
     * @ORM\Column(name="coma2", type="string", length=80, nullable=true)
     */
    private $coma2;

    /**
     * @var string
     *
     * @ORM\Column(name="comb3", type="string", length=80, nullable=true)
     */
    private $comb3;



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
     * Set invnum
     *
     * @param integer $client
     * @return TransactionPk
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
    public function getInvnum ()
    {
        return $this->invnum;
    }
    
    public function setClient($client)
    {
        $this->client = $client;
    
        return $this;
    }

    /**
     * Get client
     *
     * @return integer 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set ordnum
     *
     * @param string $ordnum
     * @return TransactionPk
     */
    public function setOrdnum($ordnum)
    {
        $this->ordnum = $ordnum;
    
        return $this;
    }

    /**
     * Get ordnum
     *
     * @return string 
     */
    public function getOrdnum()
    {
        return $this->ordnum;
    }

    /**
     * Set currency
     *
     * @param integer $currency
     * @return TransactionPk
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    
        return $this;
    }

    /**
     * Get currency
     *
     * @return integer 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set stand
     *
     * @param string $stand
     * @return TransactionPk
     */
    public function setStand($stand)
    {
        $this->stand = $stand;
    
        return $this;
    }

    /**
     * Get stand
     *
     * @return string 
     */
    public function getStand()
    {
        return $this->stand;
    }

    /**
     * Set invdate
     *
     * @param \DateTime $invdate
     * @return TransactionPk
     */
    public function setInvdate($invdate)
    {
        $this->invdate = $invdate;
    
        return $this;
    }

    /**
     * Get invdate
     *
     * @return \DateTime 
     */
    public function getInvdate()
    {
        return $this->invdate;
    }

    /**
     * Set paydate
     *
     * @param \DateTime $paydate
     * @return TransactionPk
     */
    public function setPaydate($paydate)
    {
        $this->paydate = $paydate;
    
        return $this;
    }

    /**
     * Get paydate
     *
     * @return \DateTime 
     */
    public function getPaydate()
    {
        return $this->paydate;
    }

    /**
     * Set refund
     *
     * @param float $refund
     * @return TransactionPk
     */
    public function setRefund($refund)
    {
        $this->refund = $refund;
    
        return $this;
    }

    /**
     * Get refund
     *
     * @return float 
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * Set balance
     *
     * @param float $balance
     * @return TransactionPk
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    
        return $this;
    }

    /**
     * Get balance
     *
     * @return float 
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set payflag
     *
     * @param integer $payflag
     * @return TransactionPk
     */
    public function setPayflag($payflag)
    {
        $this->payflag = $payflag;
    
        return $this;
    }

    /**
     * Get payflag
     *
     * @return integer 
     */
    public function getPayflag()
    {
        return $this->payflag;
    }

    /**
     * Set cheqnum
     *
     * @param string $cheqnum
     * @return TransactionPk
     */
    public function setCheqnum($cheqnum)
    {
        $this->cheqnum = $cheqnum;
    
        return $this;
    }

    /**
     * Get cheqnum
     *
     * @return string 
     */
    public function getCheqnum()
    {
        return $this->cheqnum;
    }

    /**
     * Set inamount
     *
     * @param float $inamount
     * @return TransactionPk
     */
    public function setInamount($inamount)
    {
        $this->inamount = $inamount;
    
        return $this;
    }

    /**
     * Get inamount
     *
     * @return float 
     */
    public function getInamount()
    {
        return $this->inamount;
    }

    /**
     * Set tmpamt
     *
     * @param float $tmpamt
     * @return TransactionPk
     */
    public function setTmpamt($tmpamt)
    {
        $this->tmpamt = $tmpamt;
    
        return $this;
    }

    /**
     * Get tmpamt
     *
     * @return float 
     */
    public function getTmpamt()
    {
        return $this->tmpamt;
    }

    /**
     * Set tmpdate
     *
     * @param \DateTime $tmpdate
     * @return TransactionPk
     */
    public function setTmpdate($tmpdate)
    {
        $this->tmpdate = $tmpdate;
    
        return $this;
    }

    /**
     * Get tmpdate
     *
     * @return \DateTime 
     */
    public function getTmpdate()
    {
        return $this->tmpdate;
    }

    /**
     * Set gross
     *
     * @param float $gross
     * @return TransactionPk
     */
    public function setGross($gross)
    {
        $this->gross = $gross;
    
        return $this;
    }

    /**
     * Get gross
     *
     * @return float 
     */
    public function getGross()
    {
        return $this->gross;
    }

    /**
     * Set nettotal
     *
     * @param float $nettotal
     * @return TransactionPk
     */
    public function setNettotal($nettotal)
    {
        $this->nettotal = $nettotal;
    
        return $this;
    }

    /**
     * Get nettotal
     *
     * @return float 
     */
    public function getNettotal()
    {
        return $this->nettotal;
    }

    /**
     * Set discount
     *
     * @param float $discount
     * @return TransactionPk
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    
        return $this;
    }

    /**
     * Get discount
     *
     * @return float 
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set prod1
     *
     * @param string $prod1
     * @return TransactionPk
     */
    public function setProd1($prod1)
    {
        $this->prod1 = $prod1;
    
        return $this;
    }

    /**
     * Get prod1
     *
     * @return string 
     */
    public function getProd1()
    {
        return $this->prod1;
    }

    /**
     * Set prod2
     *
     * @param string $prod2
     * @return TransactionPk
     */
    public function setProd2($prod2)
    {
        $this->prod2 = $prod2;
    
        return $this;
    }

    /**
     * Get prod2
     *
     * @return string 
     */
    public function getProd2()
    {
        return $this->prod2;
    }

    /**
     * Set prod3
     *
     * @param string $prod3
     * @return TransactionPk
     */
    public function setProd3($prod3)
    {
        $this->prod3 = $prod3;
    
        return $this;
    }

    /**
     * Get prod3
     *
     * @return string 
     */
    public function getProd3()
    {
        return $this->prod3;
    }

    /**
     * Set prod4
     *
     * @param string $prod4
     * @return TransactionPk
     */
    public function setProd4($prod4)
    {
        $this->prod4 = $prod4;
    
        return $this;
    }

    /**
     * Get prod4
     *
     * @return string 
     */
    public function getProd4()
    {
        return $this->prod4;
    }

    /**
     * Set prod5
     *
     * @param string $prod5
     * @return TransactionPk
     */
    public function setProd5($prod5)
    {
        $this->prod5 = $prod5;
    
        return $this;
    }

    /**
     * Get prod5
     *
     * @return string 
     */
    public function getProd5()
    {
        return $this->prod5;
    }

    /**
     * Set prod6
     *
     * @param string $prod6
     * @return TransactionPk
     */
    public function setProd6($prod6)
    {
        $this->prod6 = $prod6;
    
        return $this;
    }

    /**
     * Get prod6
     *
     * @return string 
     */
    public function getProd6()
    {
        return $this->prod6;
    }

    /**
     * Set tdesc1
     *
     * @param string $tdesc1
     * @return TransactionPk
     */
    public function setTdesc1($tdesc1)
    {
        $this->tdesc1 = $tdesc1;
    
        return $this;
    }

    /**
     * Get tdesc1
     *
     * @return string 
     */
    public function getTdesc1()
    {
        return $this->tdesc1;
    }

    /**
     * Set tdesc2
     *
     * @param string $tdesc2
     * @return TransactionPk
     */
    public function setTdesc2($tdesc2)
    {
        $this->tdesc2 = $tdesc2;
    
        return $this;
    }

    /**
     * Get tdesc2
     *
     * @return string 
     */
    public function getTdesc2()
    {
        return $this->tdesc2;
    }

    /**
     * Set tdesc3
     *
     * @param string $tdesc3
     * @return TransactionPk
     */
    public function setTdesc3($tdesc3)
    {
        $this->tdesc3 = $tdesc3;
    
        return $this;
    }

    /**
     * Get tdesc3
     *
     * @return string 
     */
    public function getTdesc3()
    {
        return $this->tdesc3;
    }

    /**
     * Set tdesc4
     *
     * @param string $tdesc4
     * @return TransactionPk
     */
    public function setTdesc4($tdesc4)
    {
        $this->tdesc4 = $tdesc4;
    
        return $this;
    }

    /**
     * Get tdesc4
     *
     * @return string 
     */
    public function getTdesc4()
    {
        return $this->tdesc4;
    }

    /**
     * Set tdesc5
     *
     * @param string $tdesc5
     * @return TransactionPk
     */
    public function setTdesc5($tdesc5)
    {
        $this->tdesc5 = $tdesc5;
    
        return $this;
    }

    /**
     * Get tdesc5
     *
     * @return string 
     */
    public function getTdesc5()
    {
        return $this->tdesc5;
    }

    /**
     * Set tdesc6
     *
     * @param string $tdesc6
     * @return TransactionPk
     */
    public function setTdesc6($tdesc6)
    {
        $this->tdesc6 = $tdesc6;
    
        return $this;
    }

    /**
     * Get tdesc6
     *
     * @return string 
     */
    public function getTdesc6()
    {
        return $this->tdesc6;
    }

    /**
     * Set quant1
     *
     * @param integer $quant1
     * @return TransactionPk
     */
    public function setQuant1($quant1)
    {
        $this->quant1 = $quant1;
    
        return $this;
    }

    /**
     * Get quant1
     *
     * @return integer 
     */
    public function getQuant1()
    {
        return $this->quant1;
    }

    /**
     * Set quant2
     *
     * @param integer $quant2
     * @return TransactionPk
     */
    public function setQuant2($quant2)
    {
        $this->quant2 = $quant2;
    
        return $this;
    }

    /**
     * Get quant2
     *
     * @return integer 
     */
    public function getQuant2()
    {
        return $this->quant2;
    }

    /**
     * Set quant3
     *
     * @param integer $quant3
     * @return TransactionPk
     */
    public function setQuant3($quant3)
    {
        $this->quant3 = $quant3;
    
        return $this;
    }

    /**
     * Get quant3
     *
     * @return integer 
     */
    public function getQuant3()
    {
        return $this->quant3;
    }

    /**
     * Set quant4
     *
     * @param integer $quant4
     * @return TransactionPk
     */
    public function setQuant4($quant4)
    {
        $this->quant4 = $quant4;
    
        return $this;
    }

    /**
     * Get quant4
     *
     * @return integer 
     */
    public function getQuant4()
    {
        return $this->quant4;
    }

    /**
     * Set quant5
     *
     * @param integer $quant5
     * @return TransactionPk
     */
    public function setQuant5($quant5)
    {
        $this->quant5 = $quant5;
    
        return $this;
    }

    /**
     * Get quant5
     *
     * @return integer 
     */
    public function getQuant5()
    {
        return $this->quant5;
    }

    /**
     * Set quant6
     *
     * @param integer $quant6
     * @return TransactionPk
     */
    public function setQuant6($quant6)
    {
        $this->quant6 = $quant6;
    
        return $this;
    }

    /**
     * Get quant6
     *
     * @return integer 
     */
    public function getQuant6()
    {
        return $this->quant6;
    }

    /**
     * Set val1
     *
     * @param float $val1
     * @return TransactionPk
     */
    public function setVal1($val1)
    {
        $this->val1 = $val1;
    
        return $this;
    }

    /**
     * Get val1
     *
     * @return float 
     */
    public function getVal1()
    {
        return $this->val1;
    }

    /**
     * Set val2
     *
     * @param float $val2
     * @return TransactionPk
     */
    public function setVal2($val2)
    {
        $this->val2 = $val2;
    
        return $this;
    }

    /**
     * Get val2
     *
     * @return float 
     */
    public function getVal2()
    {
        return $this->val2;
    }

    /**
     * Set val3
     *
     * @param float $val3
     * @return TransactionPk
     */
    public function setVal3($val3)
    {
        $this->val3 = $val3;
    
        return $this;
    }

    /**
     * Get val3
     *
     * @return float 
     */
    public function getVal3()
    {
        return $this->val3;
    }

    /**
     * Set val4
     *
     * @param float $val4
     * @return TransactionPk
     */
    public function setVal4($val4)
    {
        $this->val4 = $val4;
    
        return $this;
    }

    /**
     * Get val4
     *
     * @return float 
     */
    public function getVal4()
    {
        return $this->val4;
    }

    /**
     * Set val5
     *
     * @param float $val5
     * @return TransactionPk
     */
    public function setVal5($val5)
    {
        $this->val5 = $val5;
    
        return $this;
    }

    /**
     * Get val5
     *
     * @return float 
     */
    public function getVal5()
    {
        return $this->val5;
    }

    /**
     * Set val6
     *
     * @param float $val6
     * @return TransactionPk
     */
    public function setVal6($val6)
    {
        $this->val6 = $val6;
    
        return $this;
    }

    /**
     * Get val6
     *
     * @return float 
     */
    public function getVal6()
    {
        return $this->val6;
    }

    /**
     * Set comm
     *
     * @param string $comm
     * @return TransactionPk
     */
    public function setComm($comm)
    {
        $this->comm = $comm;
    
        return $this;
    }

    /**
     * Get comm
     *
     * @return string 
     */
    public function getComm()
    {
        return $this->comm;
    }

    /**
     * Set comment1
     *
     * @param string $comment1
     * @return TransactionPk
     */
    public function setComment1($comment1)
    {
        $this->comment1 = $comment1;
    
        return $this;
    }

    /**
     * Get comment1
     *
     * @return string 
     */
    public function getComment1()
    {
        return $this->comment1;
    }

    /**
     * Set coma2
     *
     * @param string $coma2
     * @return TransactionPk
     */
    public function setComa2($coma2)
    {
        $this->coma2 = $coma2;
    
        return $this;
    }

    /**
     * Get coma2
     *
     * @return string 
     */
    public function getComa2()
    {
        return $this->coma2;
    }

    /**
     * Set comb3
     *
     * @param string $comb3
     * @return TransactionPk
     */
    public function setComb3($comb3)
    {
        $this->comb3 = $comb3;
    
        return $this;
    }

    /**
     * Get comb3
     *
     * @return string 
     */
    public function getComb3()
    {
        return $this->comb3;
    }
    
    public function iterateVisible() 
    {
    
       echo "MyClass::iterateVisible:\n";
       foreach($this as $key => $value) {
           print "$key => $value\n";
       }
    }
}