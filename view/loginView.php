
<?php 
include "view/template/nav.php";
include "view/template/header.php";
?>

<h2 class="text-center mt-3">Connectez-vous pour poursuivre</h2>
<div class="container">
 <div class="row">
   <form class="col-12 col-md-2 my-5" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">login</label>
        <input type="email" name="login"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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

<?php require "view/template/footer.php";?>

 