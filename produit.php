<?php
$connexion=new mysqli("localhost","root","","sitetp");

$requete="SELECT * FROM `produit`";
$result=$connexion->query($requete);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pproduit</title>
</head>
<body>
  <a class="nav-link" href="formulaire.php">Formulaire</a>
  <table>
    <tr>
      <th>
        NOM
      </th>
      <th>
        taille
      </th>
      <th>
        prix
      </th>
    </tr>

  <?php
 
      foreach($result as $UnResult){
        echo "<tr>";
        echo "<td>";

        echo $UnResult['nom_produit']."<bR>";
        echo "</td>";
        echo "<td>";

        echo $UnResult['taille_produit']."<bR>";
        echo "</td>";

        echo "<td>";

        echo $UnResult['prix_produit']."<bR>";
        echo "</td>";

        echo "</tr>";


      }
  ?>
  </table>


</body>
</html>


