
<?php include("template/nav.php");?>
<?php include("template/header.php");?>

 <main class="container">
 <h2 class="my-3">Création de compte</h2>
  <form class="row g-3 my-5" method="POST">
    <div class="col-md-5">
      <label type="inputName" class="form-label">Prénom Nom</label>
      <select id="inputState" class="form-select" name="nom">
        <option selected><?php echo"  " . $_SESSION["user"]->getPrenom() ." " . $_SESSION["user"]->getNom();?></option>
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
    <div class="col-md-2">
      <label class="form-label">Montant initial du dépôt</label>
      <input type="text" class="form-control" placeholder="Minimum 500€" name="solde_compte">
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
