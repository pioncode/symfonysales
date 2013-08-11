<?php

namespace Pion\SalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsPk
 *
 * @ORM\Table(name="clients_pk")
 * @ORM\Entity
 */
class ClientsPk
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="clients_pk_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cagent_no", type="string", nullable=false)
     */
    private $cagentNo;

    /**
     * @var string
     *
     * @ORM\Column(name="cname", type="string", length=60, nullable=false)
     */
    private $cname;

    /**
     * @var string
     *
     * @ORM\Column(name="caddress1", type="string", length=60, nullable=false)
     */
    private $caddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="caddress2", type="string", length=60, nullable=true)
     */
    private $caddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="caddress3", type="string", length=60, nullable=true)
     */
    private $caddress3;

    /**
     * @var string
     *
     * @ORM\Column(name="caddress4", type="string", length=60, nullable=true)
     */
    private $caddress4;

    /**
     * @var string
     *
     * @ORM\Column(name="ccountry", type="string", length=60, nullable=true)
     */
    private $ccountry;

    /**
     * @var string
     *
     * @ORM\Column(name="cvat_no", type="string", length=30, nullable=true)
     */
    private $cvatNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ccode", type="smallint", nullable=false)
     */
    private $ccode;

    /**
     * @var string
     *
     * @ORM\Column(name="ccomments1", type="string", length=80, nullable=true)
     */
    private $ccomments1;

    /**
     * @var string
     *
     * @ORM\Column(name="ccomments2", type="string", length=80, nullable=true)
     */
    private $ccomments2;

    /**
     * @var string
     *
     * @ORM\Column(name="ccomments3", type="string", length=80, nullable=true)
     */
    private $ccomments3;

    /**
     * @var string
     *
     * @ORM\Column(name="ccomments4", type="string", length=80, nullable=true)
     */
    private $ccomments4;

    /**
     * @var string
     *
     * @ORM\Column(name="cmailout", type="string", nullable=true)
     */
    private $cmailout;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="estab_date", type="date", nullable=true)
     */
    private $estabDate;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=15, nullable=true)
     */
    private $zip;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_refno", type="integer", nullable=false)
     */
    private $clientRefno;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctype", type="smallint", nullable=true)
     */
    private $ctype;



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
     * Set cagentNo
     *
     * @param string $cagentNo
     * @return ClientsPk
     */
    public function setCagentNo($cagentNo)
    {
        $this->cagentNo = $cagentNo;
    
        return $this;
    }

    /**
     * Get cagentNo
     *
     * @return string 
     */
    public function getCagentNo()
    {
        return $this->cagentNo;
    }

    /**
     * Set cname
     *
     * @param string $cname
     * @return ClientsPk
     */
    public function setCname($cname)
    {
        $this->cname = $cname;
    
        return $this;
    }

    /**
     * Get cname
     *
     * @return string 
     */
    public function getCname()
    {
        return $this->cname;
    }

    /**
     * Set caddress1
     *
     * @param string $caddress1
     * @return ClientsPk
     */
    public function setCaddress1($caddress1)
    {
        $this->caddress1 = $caddress1;
    
        return $this;
    }

    /**
     * Get caddress1
     *
     * @return string 
     */
    public function getCaddress1()
    {
        return $this->caddress1;
    }

    /**
     * Set caddress2
     *
     * @param string $caddress2
     * @return ClientsPk
     */
    public function setCaddress2($caddress2)
    {
        $this->caddress2 = $caddress2;
    
        return $this;
    }

    /**
     * Get caddress2
     *
     * @return string 
     */
    public function getCaddress2()
    {
        return $this->caddress2;
    }

    /**
     * Set caddress3
     *
     * @param string $caddress3
     * @return ClientsPk
     */
    public function setCaddress3($caddress3)
    {
        $this->caddress3 = $caddress3;
    
        return $this;
    }

    /**
     * Get caddress3
     *
     * @return string 
     */
    public function getCaddress3()
    {
        return $this->caddress3;
    }

    /**
     * Set caddress4
     *
     * @param string $caddress4
     * @return ClientsPk
     */
    public function setCaddress4($caddress4)
    {
        $this->caddress4 = $caddress4;
    
        return $this;
    }

    /**
     * Get caddress4
     *
     * @return string 
     */
    public function getCaddress4()
    {
        return $this->caddress4;
    }

    /**
     * Set ccountry
     *
     * @param string $ccountry
     * @return ClientsPk
     */
    public function setCcountry($ccountry)
    {
        $this->ccountry = $ccountry;
    
        return $this;
    }

    /**
     * Get ccountry
     *
     * @return string 
     */
    public function getCcountry()
    {
        return $this->ccountry;
    }

    /**
     * Set cvatNo
     *
     * @param string $cvatNo
     * @return ClientsPk
     */
    public function setCvatNo($cvatNo)
    {
        $this->cvatNo = $cvatNo;
    
        return $this;
    }

    /**
     * Get cvatNo
     *
     * @return string 
     */
    public function getCvatNo()
    {
        return $this->cvatNo;
    }

    /**
     * Set ccode
     *
     * @param integer $ccode
     * @return ClientsPk
     */
    public function setCcode($ccode)
    {
        $this->ccode = $ccode;
    
        return $this;
    }

    /**
     * Get ccode
     *
     * @return integer 
     */
    public function getCcode()
    {
        return $this->ccode;
    }

    /**
     * Set ccomments1
     *
     * @param string $ccomments1
     * @return ClientsPk
     */
    public function setCcomments1($ccomments1)
    {
        $this->ccomments1 = $ccomments1;
    
        return $this;
    }

    /**
     * Get ccomments1
     *
     * @return string 
     */
    public function getCcomments1()
    {
        return $this->ccomments1;
    }

    /**
     * Set ccomments2
     *
     * @param string $ccomments2
     * @return ClientsPk
     */
    public function setCcomments2($ccomments2)
    {
        $this->ccomments2 = $ccomments2;
    
        return $this;
    }

    /**
     * Get ccomments2
     *
     * @return string 
     */
    public function getCcomments2()
    {
        return $this->ccomments2;
    }

    /**
     * Set ccomments3
     *
     * @param string $ccomments3
     * @return ClientsPk
     */
    public function setCcomments3($ccomments3)
    {
        $this->ccomments3 = $ccomments3;
    
        return $this;
    }

    /**
     * Get ccomments3
     *
     * @return string 
     */
    public function getCcomments3()
    {
        return $this->ccomments3;
    }

    /**
     * Set ccomments4
     *
     * @param string $ccomments4
     * @return ClientsPk
     */
    public function setCcomments4($ccomments4)
    {
        $this->ccomments4 = $ccomments4;
    
        return $this;
    }

    /**
     * Get ccomments4
     *
     * @return string 
     */
    public function getCcomments4()
    {
        return $this->ccomments4;
    }

    /**
     * Set cmailout
     *
     * @param string $cmailout
     * @return ClientsPk
     */
    public function setCmailout($cmailout)
    {
        $this->cmailout = $cmailout;
    
        return $this;
    }

    /**
     * Get cmailout
     *
     * @return string 
     */
    public function getCmailout()
    {
        return $this->cmailout;
    }

    /**
     * Set estabDate
     *
     * @param \DateTime $estabDate
     * @return ClientsPk
     */
    public function setEstabDate($estabDate)
    {
        $this->estabDate = $estabDate;
    
        return $this;
    }

    /**
     * Get estabDate
     *
     * @return \DateTime 
     */
    public function getEstabDate()
    {
        return $this->estabDate;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return ClientsPk
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set zip
     *
     * @param string $zip
     * @return ClientsPk
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    
        return $this;
    }

    /**
     * Get zip
     *
     * @return string 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set clientRefno
     *
     * @param integer $clientRefno
     * @return ClientsPk
     */
    public function setClientRefno($clientRefno)
    {
        $this->clientRefno = $clientRefno;
    
        return $this;
    }

    /**
     * Get clientRefno
     *
     * @return integer 
     */
    public function getClientRefno()
    {
        return $this->clientRefno;
    }

    /**
     * Set ctype
     *
     * @param integer $ctype
     * @return ClientsPk
     */
    public function setCtype($ctype)
    {
        $this->ctype = $ctype;
    
        return $this;
    }

    /**
     * Get ctype
     *
     * @return integer 
     */
    public function getCtype()
    {
        return $this->ctype;
    }
}