<!DOCTYPE html>
<html lang="fr">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire</title>
</head>
<body>

<header>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="produit.php">Produit</a>
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
</header>

  <form action="formTraitement.php" method="get">
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





