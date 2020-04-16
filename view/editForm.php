<html>
<head>
    <?php
        include 'Parts/stylesheets.html'
    ?>

<div class="container">
<h1>Modifier l'article</h1>

<form method="post" action="http://localhost/PHP-orientéObjet/j5/index.php?controller=planete&action=editPlanete">
<label>Planet name</label>
<input name="name" class="form-control" value="<?php $planete->getName(); ?>">

<label>Planet status</label>
<input name="status" class="form-control" value="<?php $planete->getStatus(); ?>">

<label>Planet key fact</label>
<input name="keyFact" class="form-control" value="<?php $planete->getKeyfact(); ?>">

<label>Planet image</label>
<input name="image" class="form-control" value="<?php $planete->getImage(); ?>">

    <input class="btn btn-success" type="submit" value="valider">
</form>
</div>
<?php
 include 'Parts/scripts.html'
?>
</body>