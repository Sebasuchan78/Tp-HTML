<?php
session_start();

if (isset($_SESSION['user'])) {
  ?>

<!DOCTYPE html>
<html lang="fr">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire</title>
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

  <form action="formTraitement.php?traitement=insertProd" method="POST">
  <div class="form-outline mb-4">
    <input type="text" name="nom" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">Nom</label>
  </div>
  <div class="form-outline mb-4">
    <input type="number" name="taille" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">taille</label>
  </div>
  <div class="form-outline mb-4">
    <input type="number" name="prix" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">prix</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block">envoyer</button>
  </form>
  
</body>
</html>


<?php

}
else{
  echo "va te faire enculer t'es pas co";
}
?>