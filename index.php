<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 22/11/2018
 * Time: 16:30
 */

include 'autoload.php';

//$produitT = new Produit("produit",10,1);
$electromenager1 = new Electromenager("prod",20,1, 350,1000);
$electromenager2= new Electromenager("prod1",40,2, 120,2000);
$textile1 = new Textile("produit",15,2,20,"red",10);
$textile2 = new Textile("produit",15,2,25,"red",20);



function calculTotalPrix(Produit ...$produits){
    $totalPrix = 0;
    foreach($produits as $produit){
        $totalPrix += $produit->calculPrix();
    }
    return $totalPrix;
}

echo "<hr>Le prix total est : ".calculTotalPrix($electromenager1,$electromenager2,$textile1,$textile2);

