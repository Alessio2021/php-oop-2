<?php
require_once __DIR__ . "/../traits/Fidelity.php";
require_once __DIR__ . "/Card.php";

class User
{
    use Fidelity;
    protected $name;
    protected $lastname;
    protected $mail;
    protected $city;
    protected $country;
    protected $card;

    public function __construct($name, $lastname, $mail, $card)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->mail = $mail;
        $this->setCard($card);
    }

    /**
     * Get the value of card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set the value of card
     *
     * @return  self
     */
    public function setCard(Card $card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get the value of country
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */ 
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

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



    /**
     * Get the value of premium
     */ 
    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * Set the value of premium
     *
     * @return  self
     */ 
    public function setPremium(bool $premium)
    {
        $this->premium = $premium;

        return $this;
    }
}
