

<?php 
include "view/template/nav.php";
include "view/template/header.php";
?>

      <main class="container my-5">
        <h1>Vos comptes</h1>
        <div class="container">
            <div class="row ">

            <?php foreach($getAccount as $data):?>

                <div class="col-md-3 mb-5 mx-5">
                  <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Titulaire</strong><?php echo"  " . $client->getPrenom() ." " . $client->getNom();?></h5>
                        <h6 class="card-subtitle mb-2"><?php echo $data -> getType_compte();?></h6>
                        <p class="card-text"><?php echo "N°compte " . $data -> getNumero_compte();?></p>
                        <p class="card-text"><strong>Solde</strong></p>
                        <p class="card-text">€<?php echo "  " . $data -> getSolde_compte();?></p>          
                        <a href="compte.php?nCompte=<?php echo $data -> getId_compte(); ?>" class="card-link stretched-link">Détail de vos opérations</a>
                    </div>
                  </div>
                </div>
           <?php endforeach?>

         </main>               

    <?php include "view/template/footer.php";?>

