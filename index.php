<?php 
session_start();
 if(isset($_SESSION["user"])){
    require "model/request.php";
    require "model/getLogin.php";
    require "model/getCompteModel.php";

    $account = getCompte($db);
    $user = $_SESSION;


} else {
    header("Location:login.php");
    exit;
}
 ?>

<?php 
    

foreach($user as $infos){
  var_dump($infos["id"]);
}
    
    
  ?>
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
<?php include("template/nav.php");?>
<?php include("template/header.php");?>
<?php include("model/accounts.php");?>

      <main class="container my-5">
        <h1>Vos comptes</h1>
        <div class="container">
            <div class="row">

                  <?php foreach($user as $infos) :?>
                <div class="col-md-4 mb-5">
                  <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $infos['prenom']?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $infos['c_email']?></h6>
                        <p class="card-text"><strong>Solde </strong><?php echo '+ '.$infos['numero_compte'].'€'?></p>
                        <p class="card-text"><strong>Dernière opération</strong><br><?php echo $user['numero_compte']?></p>          
                        <a href="" class="card-link ">Vos opérations</a>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
         </main>               

    <?php include("template/footer.php");?>

    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
   </body>
</html>