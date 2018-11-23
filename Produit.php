<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 22/11/2018
 * Time: 15:22
 */
include 'Prix.php';
class Produit implements Prix{
    protected $designation;
    protected $prixHt;
    protected $reference;

    /**
     * Produit constructor.
     * @param $designation
     * @param $prixHt
     * @param $reference
     */
    public function __construct($designation='produit', $prixHt, $reference)
    {
        $this->designation = $designation;
        $this->prixHt = $prixHt;
        $this->reference = $reference;
    }


    public function calculPrix()
    {
       return $this->prixHt;
    }

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    /**
     * @return mixed
     */
    public function getPrixHt()
    {
        return $this->prixHt;
    }

    /**
     * @param mixed $prixHt
     */
    public function setPrixHt($prixHt)
    {
        $this->prixHt = $prixHt;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }


}