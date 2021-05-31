

<?php 
include "view/template/nav.php";
include "view/template/header.php";
?>

      <main class="container my-5">
        <h1>Vos comptes</h1>
        <div class="container">
            <div class="row ">

            <?php foreach($account as $data):?>

                <div class="col-md-3 mb-5 mx-5">
                  <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_SESSION["user"]["prenom"] ." ". $_SESSION["user"]["nom"];?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $data["type_compte"]?></h6>
                        <p class="card-text"><?php echo "N°compte " . $data["numero_compte"]?></p>
                        <p class="card-text"><strong>Solde</strong></p>
                        <p class="card-text"><?php echo $data["solde_compte"]?></p>          
                        <a href="compte.php?nCompte=<?php echo $data["id_compte"] ?>" class="card-link stretched-link">Détail de vos opérations</a>
                    </div>
                  </div>
                </div>
           <?php endforeach?>

         </main>               

    <?php include "view/template/footer.php";?>

