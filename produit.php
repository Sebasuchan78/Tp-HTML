<?php
$connexion=new mysqli("localhost","root","","sitetp");

$requete="SELECT * FROM `produit`";
$result=$connexion->query($requete);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pproduit</title>
</head>
<body>

  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="formulaire.php">Formulaire</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
  </div>
  </nav>
  
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">taille</th>
      <th scope="col">prix</th>
    </tr>
  </thead>
  <tbody>

  <?php
      
      $id = 0;
      foreach($result as $UnResult){
        echo "<tr>";
        echo "<th>".$id++."</th>";
        echo "<td>";

        echo $UnResult['nom_produit']."<bR>";
        echo "</td>";
        echo "<td>";

        echo $UnResult['taille_produit']."<bR>";
        echo "</td>";

        echo "<td>";

        echo $UnResult['prix_produit']." €"."<bR>";
        echo "</td>";

        echo "</tr>";


      }
  ?>
  </tbody>
  </table>


</body>
</html>


