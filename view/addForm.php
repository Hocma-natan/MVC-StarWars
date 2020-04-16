<html>
<head>
    <?php
        include 'Parts/stylesheets.html'
    ?>

<div class="container">
<h1>Ajout d'une nouvelle planete</h1>

<form method="post" action="http://localhost/PHP-orientéObjet/j5/index.php?controller=planete&action=addPlanete">
<label>Planet name</label>
<input name="name" class="form-control">

<label>Planet status</label>
<input name="status" class="form-control">

<label>Planet key fact</label>
<input name="keyFact" class="form-control">

<label>Planet image</label>
<input name="image" class="form-control">

    <input class="btn btn-success" type="submit" value="valider">
</form>
</div>
<?php
 include 'Parts/scripts.html'
?>
</body>