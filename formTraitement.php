<?php
switch($_GET['traitement']){
    case 'inscription':
        $nom = $_POST["nom"];
        $mail = $_POST["email"];
        $mdp = $_POST["mdp"];
        $cout = ['cost' => 12];
        $hash = password_hash($mdp, PASSWORD_BCRYPT, $cout);
        $connexion=new mysqli("localhost","root","","sitetp");
        $requete= "INSERT INTO utilisateur(nom, email, mdp) VALUES ('$nom', '$mail', '$hash')";
        $connexion->query($requete);
        $connexion->close();
        include('./utilisateur.php');
        break;
    case 'login':
        $mail = $_POST['email'];
        $mdp = $_POST['mdp'];
        $connexion=new mysqli("localhost","root","","sitetp");
        $req = "SELECT mdp FROM utilisateur WHERE email = '$mail'";
        $result = $connexion->query($req);
        $ligne = mysqli_fetch_assoc($result);
        if (password_verify($mdp, $ligne['mdp'])) {
            $requete = "SELECT * FROM utilisateur WHERE email = '$mail' ";
            $result = $connexion->query($requete);
            $ligne = mysqli_fetch_assoc($result);
            $connexion->close();
            if (isset($ligne)) {
                session_start();
                $_SESSION['user'] = $ligne;
                header('Location: produit.php');
            } else {
                echo "<h1 style='font-size: 72px; text-align: center;'>va te faire enculer</h1>";
                include("utilisateur.php");
            }
        }
        else {
            echo "le mot de passe est invalide";
        }
        break;
    case 'insertProd':
        $nom = $_POST["nom"];
        $taille = $_POST["taille"];
        $prix = $_POST["prix"];
        $connexion=new mysqli("localhost","root","","sitetp");
        $requete= "INSERT INTO produit(nom_produit, taille_produit, prix_produit) VALUES ('$nom', $taille, $prix)";
        $result = $connexion->query($requete);
        $connexion->close();
        include('./formulaire.php');
        break;
    case 'deco':
        session_start();
        session_destroy();
        header('Location: utilisateur.php');
    case 'supp':
        $id = $_GET['id'];
        $connexion=new mysqli("localhost","root","","sitetp");
        $requete = "DELETE FROM produit WHERE id = $id";
        $connexion->query($requete);
        include('./formulaire.php');
    case 'modif':
        $id = $_GET['id'];
        $Nname = $_POST['Nname'];
        $nmail = $_POST['Nmail'];
        $Nmdp = $_POST['Nmdp'];

        $connexion=new mysqli("localhost","root","","sitetp");
        if(empty($Nmdp)){
            $requete = "UPDATE utilisateur SET email='$nmail', nom='$Nname' WHERE id = '$id'";
            $connexion->query($requete);
            var_dump("ca marche sans mdp fdp");
        }
        else{
            $cout = ['cost' => 12];
            $hash = password_hash($Nmdp, PASSWORD_BCRYPT, $cout);
            $requete = "UPDATE utilisateur SET mdp = '$hash', email='$nmail', nom='$Nname' WHERE id = '$id'";
            $connexion->query($requete);
            var_dump("ca marche avec mdp grosse chienne");
        }
        header('Location: produit.php');

       
       
        

}

?>