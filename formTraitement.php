<?php
$nom = $_GET["nom"];
$taille = $_GET["taille"];
$prix = $_GET["prix"];
$connexion=new mysqli("localhost","root","","sitetp");
$requete= "INSERT INTO produit(nom_produit, taille_produit, prix_produit) VALUES ('$nom', $taille, $prix)";
$result = $connexion->query($requete);
include('./formulaire.php');

?>