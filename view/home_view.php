<html>
    <head>
    <?php
        include 'Parts/stylesheets.html'
    ?>


<div class="container">
    <table class="table">
        <thead>
            <td> Name</td>
            <td>Status</td>
            <td>Key fact(s)</td>
            <td>Image</td>
            <td>Options</td>
        </thead>

        <tbody>
        <?php
        foreach($planetes as $pla){
        ?>
            <tr>
                <td><?php echo $pla->getName() ?></td>
                <td><?php echo $pla->getStatus() ?></td>
                <td><?php echo $pla->getKeyfact() ?></td>
                <td><img src="<?php echo $pla->getImage() ?>" alt="planete : <?php echo $pla->getName() ?>"></td>
                <td>
                    <a href="http://localhost/PHP-orientéObjet/j5/index.php?controller=planete&action=delete&id=<?php echo $pla->getId() ?>">Supprimer</a>
                    <a href="http://localhost/PHP-orientéObjet/j5/index.php?controller=planete&action=editForm&id=<?php echo $pla->getId() ?>">Modifier</a>
                </td>
            </tr>
            <?php
        }
    ?>
        </tbody>
        
    </table>
</div>

    </body>


<?php
include 'Parts/scripts.html'
?>


</html>
