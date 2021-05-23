<?php 
    /*$_SESSION["username"]= Joël

   if($_SESSION["ValidLogin"]){
       header("Location: index.php");
   }
*/

?>


<?php   

      if(!empty($_POST)){
        $log=$_POST["login"];
        $pass=$_POST["password"];
        htmlspecialchars($log);
        htmlspecialchars($pass);
       
    }
       if(isset($_POST['login']) && !empty($_POST['login'] && $_POST['login'] === "aze" ) &&
            isset($_POST['password'])  && !empty($_POST["password"] && $_POST["password"] === "qsd")){

              session_start();
              $_SESSION["validLogin"] = true;
              header("Location: index.php");

            } elseif (empty($_POST)) {;?> 
              <div class="alert alert-primary" role="alert">
                Bienvenue, veuillez entrer vos identifiants
             </div>
         <?php   } else { ;?>
              <div class="alert alert-dark" role="alert">
                Une erreur est survenue, veuillez vérifer vos identifiants
             </div>
             <?php };?>   


<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

    <title>My Bank</title>
</head>

<body>
<?php include("nav.php");?>
<?php include("header.php");?>





<h2 class="text-center mt-3">Connectez-vous pour poursuivre</h2>
<div class="container">
 <div class="row">
   <form class="col-12 col-md-2 my-5" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">login</label>
        <input type="" name="login"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp"  class="form-text">N'ayez pas peur de nous... entrez dans l'inconnue</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-dark">Entrez en nous</button>
  </form>
 </div>
</div>

<?php include("footer.php");?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>