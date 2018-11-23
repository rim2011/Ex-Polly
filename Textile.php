<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 22/11/2018
 * Time: 15:38
 */
class Textile extends Produit{
    private $taille;
    private $couleur;
    private $tva;

    /**
     * Textile constructor.
     * @param $taille
     * @param $couleur
     * @param $tva
     */
    public function __construct($designation, $prixHt, $reference,$taille, $couleur, $tva)
    {
        parent::__construct($designation, $prixHt, $reference);
        $this->taille = $taille;
        $this->couleur = $couleur;
        $this->tva = $tva;
    }

    public function calculPrix()
    {
        $prix=$this->prixHt + $this->tva;
        echo "Textile : ".$prix."<br>";
        return $prix;

    }

    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * @param mixed $tva
     */
    public function setTva($tva)
    {
        $this->tva = $tva;
    }

}