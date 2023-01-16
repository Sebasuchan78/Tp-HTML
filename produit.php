<?php
$connexion=new mysqli("localhost","root","","sitetp");

$requete="SELECT * FROM `produit`";
$result=$connexion->query($requete);
session_start();

if(isset($_SESSION['user'])){

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pproduit</title>
      <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
</head>


<body>

<?php
    include("navbar.php");
?>

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
      
      $id = 1;
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

<?php
  
}
else{
  echo "va te faire enculer t'es pas co";
}
?>