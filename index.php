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

if











    <!-- <div id="layer">
        <div id="layertxt"></div>
        <div id="btnlayer" class="loadContent">Veuillez accepter pour accéder <button type="button" value="Accepter"
                id="butn" class="btn btn-dark">Accepter</button>
        </div>
    </div>  /////////////////// IMPORTER FICHIER TXT POUR LAYER-->
<?php include("nav.php");?>
<?php include("header.php");?>
<?php include("accounts.php");?>

      <main class="container my-5">
        <h1>Vos comptes</h1>
        <div class="container">
            <div class="row">

         <?php   foreach(get_accounts() as $name => $infos){ ?>

                <div class="col-md-4 mb-5">
                  <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $infos['owner'].': '.$infos['name']?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $infos['number']?></h6>
                        <p class="card-text"><strong>Solde </strong><?php echo '+ '.$infos['amount'].'€'?></p>
                        <p class="card-text"><strong>Dernière opération</strong><br><?php echo $infos['last_operation']?></p>
                
                            
                        <a href="*
                        
                        " class="card-link ">Vos opérations</a>
                    </div>
                  </div>
                </div>
                <?php } ?>
         </main>




               

    <?php include("footer.php");?>





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