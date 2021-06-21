<?php 
include "view/template/nav.php";
include "view/template/header.php";
?>
      <main class="container mt-5">
        <h1>Détails des opérations</h1>
        <div class="container">
            <div class="row ">

             <table class="table">
                <thead>
                  <tr>
                    <th scope="col"><?php echo"  " . $_SESSION["user"]->getPrenom() ." " . $_SESSION["user"]->getNom();?></th>
                    <th scope="col">Date</th>
                    <th scope="col">Type de transaction</th>
                    <th scope="col">Montant</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php foreach($details as $data):?>
                    <th scope="row"></th>
                    <td><?php echo $data -> getDate_operation();?></td>
                    <td><?php echo $data -> getType_de_transaction();?></td>
                    <td><?php echo $data -> getMontant();?></td>          
                   </tr>
                   <?php endforeach?>
                </tbody>        
             </table>  
            </div>
           </div>
       </main>               

       <?php include "view/template/footer.php";?>

 