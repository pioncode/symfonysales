// src/Pion/SalesBundle/Entity/Product.php
namespace Pion\SalesBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
 */

/**
* @ORM\Entity
* @ORM\Table(name="transaction")
*/
class Transaction {
/**
* @ORM\currency
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
protected
    /**
     * @var integer
     */
    private $client;

    /**
     * @var string
     */
    private $ordnum;

    /**
     * @var integer
     */
    private $currency;

    /**
     * @var string
     */
    private $stand;

    /**
     * @var \DateTime
     */
    private $invdate;

    /**
     * @var \DateTime
     */
    private $paydate;

    /**
     * @var float
     */
    private $refund;

    /**
     * @var float
     */
    private $balance;

    /**
     * @var integer
     */
    private $payflag;

    /**
     * @var string
     */
    private $cheqnum;

    /**
     * @var float
     */
    private $inamount;

    /**
     * @var float
     */
    private $tmpamt;

    /**
     * @var \DateTime
     */
    private $tmpdate;

    /**
     * @var float
     */
    private $gross;

    /**
     * @var float
     */
    private $nettotal;

    /**
     * @var float
     */
    private $discount;

    /**
     * @var string
     */
    private $prod1;

    /**
     * @var string
     */
    private $prod2;

    /**
     * @var string
     */
    private $prod3;

    /**
     * @var string
     */
    private $prod4;

    /**
     * @var string
     */
    private $prod5;

    /**
     * @var string
     */
    private $prod6;

    /**
     * @var string
     */
    private $tdesc1;

    /**
     * @var string
     */
    private $tdesc2;

    /**
     * @var string
     */
    private $tdesc3;

    /**
     * @var string
     */
    private $tdesc4;

    /**
     * @var string
     */
    private $tdesc5;

    /**
     * @var string
     */
    private $tdesc6;

    /**
     * @var integer
     */
    private $quant1;

    /**
     * @var integer
     */
    private $quant2;

    /**
     * @var integer
     */
    private $quant3;

    /**
     * @var integer
     */
    private $quant4;

    /**
     * @var integer
     */
    private $quant5;

    /**
     * @var integer
     */
    private $quant6;

    /**
     * @var float
     */
    private $val1;

    /**
     * @var float
     */
    private $val2;

    /**
     * @var float
     */
    private $val3;

    /**
     * @var float
     */
    private $val4;

    /**
     * @var float
     */
    private $val5;

    /**
     * @var float
     */
    private $val6;

    /**
     * @var string
     */
    private $comm;

    /**
     * @var string
     */
    private $comment1;

    /**
     * @var string
     */
    private $coma2;

    /**
     * @var string
     */
    private $comb3;

    /**
     * @var integer
     */
    private $invnum;


    /**
     * Set client
     *
     * @param integer $client
     * @return Transaction
     */
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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

    /**
     * Get invnum
     *
     * @return integer 
     */
    public function getInvnum()
    {
        return $this->invnum;
    }
}