<?php require_once ("View/Head.php"); ?>
    <?php
        if ( !is_null($toLookFor) ){
            ?>

            <div class="text-center">
                <div class="spacer-10"></div>
                <h2>Aucun resultat trouvé avec : <?= $toLookFor ?> </h2>
            </div>

            <?php
        } else {
            ?>

            <div class="text-center">
                <div class="spacer-10"></div>
                <h2>Aucun resultat trouvé avec : vide </h2>
            </div>

            <?php
        }
    ?>

    <div class="spacer-60"></div>
<?php require_once ("View/EndBody.php"); ?>