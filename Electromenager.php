<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 22/11/2018
 * Time: 15:34
 */
class Electromenager extends Produit{
    private $consommation;
    private $taxeConsommation;

    /**
     * Electromenager constructor.
     * @param $consommation
     * @param $taxeConsommation
     */
    public function __construct($designation, $prixHt, $reference,$consommation, $taxeConsommation)
    {
        parent::__construct($designation, $prixHt, $reference);
        $this->consommation = $consommation;
        $this->taxeConsommation = $taxeConsommation;
    }


    public function calculPrix()
    {
        $prix=0;
        if ($this->consommation < 100) {
            echo "Electromenager : " . $this->prixHt . "<br>";
            return $prix;
        }
        elseif ($this->consommation > 100 && $this->consommation < 300) {
            $prix=$this->prixHt + ($this->taxeConsommation) * 10 / 100;
            echo "Electromenager : ". $prix."<br>";
            return $prix;
        }
        else {
            $prix=$this->prixHt + ($this->taxeConsommation)*35/100;
            echo "Electromenager : ".$prix."<br>";
            return $prix;

        }
    }


    /**
     * @return mixed
     */
    public function getConsommation()
    {
        return $this->consommation;
    }

    /**
     * @param mixed $consommation
     */
    public function setConsommation($consommation)
    {

        $this->consommation = $consommation;
    }

    /**
     * @return mixed
     */
    public function getTaxeConsommation()
    {
        return $this->taxeConsommation;
    }

    /**
     * @param mixed $taxeConsommation
     */
    public function setTaxeConsommation($taxeConsommation)
    {
        $this->taxeConsommation = $taxeConsommation;
    }

}