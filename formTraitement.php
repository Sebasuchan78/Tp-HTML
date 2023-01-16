<?php
switch($_GET['traitement']){
    case 'inscription':
        $nom = $_POST["nom"];
        $mail = $_POST["email"];
        $mdp = $_POST["mdp"];
        $connexion=new mysqli("localhost","root","","sitetp");
        $requete= "INSERT INTO utilisateur(nom, email, mdp) VALUES ('$nom', '$mail', '$mdp')";
        $connexion->query($requete);
        include('./utilisateur.php');
        break;
    case 'login':
        $mail = $_POST['email'];
        $mdp = $_POST['mdp'];
        $connexion=new mysqli("localhost","root","","sitetp");
        $requete = "SELECT * FROM utilisateur WHERE email = '$mail' AND mdp ='$mdp' ";
        $result = $connexion->query($requete);
        $ligne = mysqli_fetch_assoc($result);
        if(isset($ligne)){
            session_start();
            $_SESSION['user'] = $ligne;
            header('Location: produit.php');
        }
        else{
            echo "<h1 style='font-size: 72px; text-align: center;'>va te faire enculer</h1>";
            include("utilisateur.php");
        }
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
    case 'deco':
        session_start();
        session_destroy();
        header('Location: utilisateur.php');
}




?>