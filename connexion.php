<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="connexion.php" method="get">
        <input type="text" name="nom" id="">
        <input type="number" name="taille" id="">
        <input type="number" name="prix" id="">
        <input type="submit" value="valider">
    </form>
</body>
</html>






<?php
$nom = $_GET["nom"];
$taille = $_GET["taille"];
$prix = $_GET["prix"];
$connexion=new mysqli("localhost","root","","sitetp");
$requete= "INSERT INTO produit(nom_produit, taille_produit, prix_produit) VALUES ('$nom', $taille, $prix)";
$result = $connexion->query($requete);
?>
