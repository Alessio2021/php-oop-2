<?php

class Card 
{
    protected $number;
    protected $cvv;
    protected $expireDate;

    public function __construct($number, $cvv, $expireDate)
    {
        $this->number = $number;
        $this->cvv = $cvv;
        $this->expireDate = $expireDate;
    }


    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of cvv
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */ 
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of expireDate
     */ 
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Set the value of expireDate
     *
     * @return  self
     */ 
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }
}