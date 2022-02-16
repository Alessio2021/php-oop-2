<?php

require_once __DIR__ . "/../traits/Fidelity.php";


class Product 
{
    use Fidelity;
    protected $name;
    protected $price;
    protected $model;

    public function __construct($name, $price, $model)
    {
        $this->name = $name;        
        $this->price = $price;        
        $this->model = $model;        
    }

    /**
     * Get the value of model
     */ 
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice($level, $discount)
    {
        if ($level) {
            $this->price = $this->price * ((100 - $discount) / 100);
        } 

        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
