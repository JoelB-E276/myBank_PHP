<?php 
session_start();
 if(isset($_SESSION["user"])){
    require "model/request.php";
    require "model/getLogin.php";
    require "model/getCompteModel.php";
    require "model/getDetailModel.php";
    require "model/getDataModel.php";
    $account = getCompte($db,$_SESSION["user"]["id"]);
   /* $data = getdata($db,$_SESSION["user"]["id"]);
    

} else {
    header("Location:login.php");
    exit;
}
 ?>

<?php 
var_dump ($_POST);
/*


  $montant = formatDatas($_POST["montant"]);/*op*/
 /* $dateOuv = formatDatas($_POST["date_ouv"]);/*cpt*/
  /*$typeCompte = formatDatas($_POST["type_compte"]);/*cpt
  insertDb($db,$typeTransaction);  */
  if(isset($montant) && isset($montant) && isset($dateOuv) && isset($typeCompte)){
      formatDatas($datas);
      insertDb($db,$_SESSION["user"]["id"]);

   }
  function formatDatas($datas){
    $datas = trim($datas);
    $datas = stripslashes($datas);
    $datas = htmlspecialchars($datas);
    return $datas;
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

 <main class="container">
 <h2>Création de compte</h2>
 <form class="row g-3" method="POST">
  <div class="col-md-5">
    <label type="inputName" class="form-label">Prénom Nom</label>
    <select id="inputState" class="form-select" name="nom">
      <option selected>Titulaire du compte</option>
      <option><?php echo $_SESSION["user"]["prenom"] ." ". $_SESSION["user"]["nom"]?></option>
    </select>
  </div>
  <div class="col-md-5">
    <label class="form-label">Vous souhaitez ouvrir </label>
    <select class="form-select" name="type_compte">
      <option selected>Type de compte</option>
      <option>Livret Jeune</option>
      <option>Livret Développement Durable et Solidaire</option>
      <option>Livret Epargne Populaire</option>
      <option>Livret qui rapporte</option>
    </select>
  </div>
  <div class="col-md-5">
    <label for="inputDate" class="form-label">Date de création</label>
    <input type="date" class="form-control" name="date_ouv">
  </div>
  <div class="col-md-2">
    <label class="form-label">Montant initial du dépôt</label>
    <input type="text" class="form-control" placeholder="Minimum 500€" name="montant">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        J'accepte les conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-dark">Créer</button>
  </div>
</form>
        

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