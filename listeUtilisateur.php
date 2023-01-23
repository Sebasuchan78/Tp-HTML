<?php
$connexion=new mysqli("localhost","root","","sitetp");

$requete="SELECT * FROM `utilisateur`";
$result=$connexion->query($requete);
session_start();

if (isset($_SESSION['user'])) {
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listeUtilisateur.css">
    <title>liste utilisateur</title>
</head>
<body>

<?php
include('navbar.php');
?>

<div id="demo">
  <h1>Liste d'utilisateur</h1>
  
 
  <div class="table-responsive-vertical shadow-z-1">
  <!-- Table starts here -->
  <table id="table" class="table table-hover table-mc-light-blue">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>mail</th>
          <th>mdp</th>
          <th>modification</th>
        </tr>
      </thead>
 
<?php
foreach($result as $UnResult){
 ?>
 
    <tbody>
        <tr>
          <td data-title="ID"><?=$UnResult['id']?></td>
          <td data-title="Name"><?=$UnResult['nom']?></td>
          <td data-title="mail"><?=$UnResult['email']?></td>
          <td data-title="mdp"><?=$UnResult['mdp']?></td>
          <td data-title= "modif"> 
          <a class="btn btn-primary" href="modification.php?id=<?=$UnResult['id']?>" role="button">modification</a></td>
        </tr>
    </tbody>
<?php
}
?>

</div>
</div>
 
</body>
</html>



<script>
    
$(document).ready(function () {
  var table = $("#table");

  // Table bordered
  $("#table-bordered").change(function () {
    var value = $(this).val();
    table.removeClass("table-bordered").addClass(value);
  });

  // Table striped
  $("#table-striped").change(function () {
    var value = $(this).val();
    table.removeClass("table-striped").addClass(value);
  });

  // Table hover
  $("#table-hover").change(function () {
    var value = $(this).val();
    table.removeClass("table-hover").addClass(value);
  });

  // Table color
  $("#table-color").change(function () {
    var value = $(this).val();
    table.removeClass(/^table-mc-/).addClass(value);
  });
});

// jQuery’s hasClass and removeClass on steroids
// by Nikita Vasilyev
// https://github.com/NV/jquery-regexp-classes
(function (removeClass) {
  jQuery.fn.removeClass = function (value) {
    if (value && typeof value.test === "function") {
      for (var i = 0, l = this.length; i < l; i++) {
        var elem = this[i];
        if (elem.nodeType === 1 && elem.className) {
          var classNames = elem.className.split(/\s+/);

          for (var n = classNames.length; n--; ) {
            if (value.test(classNames[n])) {
              classNames.splice(n, 1);
            }
          }
          elem.className = jQuery.trim(classNames.join(" "));
        }
      }
    } else {
      removeClass.call(this, value);
    }
    return this;
  };
})(jQuery.fn.removeClass);
</script>

<?php
}
?>