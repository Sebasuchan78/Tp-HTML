<?php
switch($_GET['traitement']){
    case 'inscription':
        $nom = $_POST["nom"];
        $mail = $_POST["email"];
        $mdp = $_POST["mdp"];
        $connexion=new mysqli("localhost","root","","sitetp");
        $requete= "INSERT INTO utilisateur(nom, email, mdp) VALUES ('$nom', '$mail', '$mdp')";
        $result = $connexion->query($requete);
        include('./utilisateur.php');
        break;
    case 'login':
        $nom = $_POST['nom'];
        $mail = $_POST['email'];
        $connexion=new mysqli("localhost","root","","sitetp");
        break;
    case 'insertProd':
        $nom = $_POST["nom"];
        $taille = $_POST["taille"];
        $prix = $_POST["prix"];
        $connexion=new mysqli("localhost","root","","sitetp");
        $requete= "INSERT INTO produit(nom_produit, taille_produit, prix_produit) VALUES ('$nom', $taille, $prix)";
        $result = $connexion->query($requete);
        include('./formulaire.php');
        break;
}




?>