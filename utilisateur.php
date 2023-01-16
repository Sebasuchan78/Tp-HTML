






<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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

    <!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="tab-login"
      data-mdb-toggle="pill"
      href="#pills-login"
      role="tab"
      aria-controls="pills-login"
      aria-selected="true"
      >Login</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="tab-register"
      data-mdb-toggle="pill"
      href="#pills-register"
      role="tab"
      aria-controls="pills-register"
      aria-selected="false"
      >Register</a
    >
  </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="container">
    <div class="row">
        <div class = "col-md-12">
            
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
  
    <form action="formTraitement.php?traitement=login" method="POST">    

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" name="email" id="loginName" class="form-control" />
        <label class="form-label" for="loginName">Email</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" name="mdp" id="loginPassword" class="form-control" />
        <label class="form-label" for="loginPassword">password</label>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

    </form>
  </div>
  <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
    
    <form action="formTraitement.php?traitement=inscription" method="POST">

      <!-- Name input -->
      <div class="form-outline mb-4">
        <input type="text" name="nom" id="registerName" class="form-control" />
        <label class="form-label" for="registerName">Prenom</label>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" name="email" id="registerEmail" class="form-control" />
        <label class="form-label" for="registerEmail">Email</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" name="mdp" id="registerPassword" class="form-control" />
        <label class="form-label" for="registerPassword">Password</label>
      </div>

      <!-- Checkbox -->
      <div class="form-check d-flex justify-content-center mb-4">
        <input
          class="form-check-input me-2"
          type="checkbox"
          value=""
          id="registerCheck"
          checked
          aria-describedby="registerCheckHelpText"
        />
        <label class="form-check-label" for="registerCheck">
          I have read and agree to the terms
        </label>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
    </form>
  </div>
</div>
        </div>
    </div>
    </div>
</div>
<!-- Pills content -->
</body>
</html>