<?php
  $configs = include('../assets/mod/config.php');
  if(!empty($_COOKIE["__LOGIN__"]) && $_COOKIE["__LOGIN__"] == "TRUE"){
    header("Location:  ../");
  }
  
  include('../assets/mod/loginCookies.php');
    

  $user = "";
  $pass = "";
  $errorType="";
  require("../assets/mod/class.Encryption.php");
  include("../assets/mod/requestuser.php");

  $responses = include("../assets/mod/responses.php");
  if(isset($_COOKIE["__err__"])){
    $errorType = $_COOKIE["__err__"];
  }
  
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mathias Brunkow Moser">
    <link rel="icon" href="../media/favicon.ico" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css"/>
  <link rel="stylesheet" type="text/css" href="../assets/css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../assets/bt/css/bootstrap.css"/>
  <script src="../assets/js/libs/jquery/jquery-3.5.1.slim.min.js"></script>
  <script src="https://kit.fontawesome.com/6d67b863f5.js" crossorigin="anonymous"></script>
      <!-- Custom styles for this template -->
      <link href="auth.css" rel="stylesheet">
</script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


  </head>
<body class="body">
<script>var configs = <?php echo json_encode($configs); ?>;</script>
  <header class="user fixed-top">
      <div class="container-fluid p-0">
          <div class="row">
              <div class="col-4 d-flex justify-content-start align-items-center"><a id="return"class="m-4" href="../"><i style="font-size: 2em" class="far fa-arrow-alt-circle-left mr-1"></i></a></div>
          </div>
      </div>
    </header>
<main class="form-signin" >
  <form id="loginform" method="post" class="needs-validation" novalidate autocomplete="off">
    <div class="text-center">
      <img id="logo" src="../media/img/feedex.png" alt="logoufv">
    </div>
    <div class="form-label-group">
      <div class="form-floating field">
      <input type="email" id="inputEmail" value="<?php echo $user?>" class="form-control" placeholder="Email address" required>
      <label for="inputEmail">Correo electr??nico</label>
      <div class="invalid-feedback">
          Por favor introduza su correo!
      </div>
      <div class="valid-feedback">
          OK!
      </div>
      </div>
    </div>
    <div class="form-label-group">
    <div class="form-floating field">
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <label for="inputPassword">Contrase??a</label>
      <div class="invalid-feedback">
          Por favor introduza su contrase??a!
      </div>
      <div class="valid-feedback">
          OK!
      </div>
      </div>
    </div>
        
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" id="remember" value="check"> Remember me
      </label>
    </div>
    <button class="btn btn-lg w-100 btn-primary btn-block" type="submit">Log in</button>
    <div class="mb-1 form-label-group">
      <p class="mt-3">??Todav??a no tienes una cuenta? <a href="registro.php">Registrate</a></p>
    </div>
  </form>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
          <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </symbol>
          <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
          </symbol>
        </svg>
        <?php
            if(isset($errorType) && array_key_exists($errorType, $responses)){
                echo $responses[$errorType];
            }
          ?>
</main>
    <style>
        a.google {
            border-color: #eee !important;
            color: #333;
            color: #fff;
            background-color: #E44439;
        }
        a.google:hover, a.google:active {
            opacity: 0.8;
        }
    </style>
  </body>
  <script src="../assets/bt/js/bootstrap.js"></script>
<script src="../assets/js/libs/crypto-js/aes.js"></script>
<script src="../assets/js/cryptool/hashFunctions.js"></script>
<script src="../assets/js/login.js"></script>

