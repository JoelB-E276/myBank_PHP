<?php 
session_start();
 if(isset($_SESSION["user"])){
    require "model/request.php";
    require "model/getLogin.php";
    require "model/getCompteModel.php";
    require "model/getDetailModel.php";
    $account = getCompte($db,$_SESSION["user"]["id"]);
    $detail = getDetail($db,$_GET["nCompte"]);


} else {
    header("Location:login.php");
    exit;
}
 ?>

<?php 
var_dump ($detail);


    
    
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
        <h1>Détails des opérations</h1>
        <div class="container">
            <div class="row ">

             <table class="table">
                <thead>
                  <tr>
                    <th scope="col"><?php echo $_SESSION["user"]["prenom"] ." ". $_SESSION["user"]["nom"];?></th>
                    <th scope="col">Date</th>
                    <th scope="col">Type de transaction</th>
                    <th scope="col">Montant</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php foreach($detail as $data):?>
                    <th scope="row"></th>
                    <td><?php echo $data["date_operation"]?></td>
                    <td><?php echo $data["type_de_transaction"]?></td>
                    <td><?php echo $data["montant"]?></td>          
                   </tr>
                   <?php endforeach?>
                </tbody>        
             </table>  
           

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