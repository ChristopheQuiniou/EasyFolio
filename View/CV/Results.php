<?php require_once ("View/Head.php"); ?>
    <?php

        if ( !is_null($toLookFor) ){

            if( !is_null($results) ){
                ?>
                <div class="text-center">
                    <div class="spacer-10"></div>
                    <h2><?= sizeof($results);?> résultat(s) trouvé(s) avec : <?= $toLookFor ?> </h2>
                </div>

                <div class="container">
                    <div class="columns">
                        <div class="col-4">
                        </div>
                        <div class="col-4">
                        <div class="spacer-6"></div>
                        <?php
                        foreach($results as $cv){
                            //print_r($cv);
                            ?>
                            <div class="cv">
                                <a href=<?= "?controller=CV&action=CV&param1=" . $cv["cvId"] ?> ><h2><?= $cv["cvTitle"]; ?></h2></a>
                                 <p>
                                     <a href=<?= "?controller=Account&action=Account&param1=" . $cv["accountId"] ?> ><?= $cv["accountName"] . $cv["accountSurname"] . " : "?></a>
                                     a <?=  $cv["nbProject"] ?> projet(s) en rapport avec <?= $toLookFor ?>
                                 </p>
                            </div>
                            <div class="spacer-1"></div>
                            <?php
                        }
                        ?>

                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                </div>
                <?php

            } else {
                ?>
                <div class="text-center">
                    <div class="spacer-10"></div>
                    <h2>Aucun résultat trouvé avec : <?= $toLookFor ?> </h2>
                </div>
                <?php
            }

        } else {
            ?>

            <div class="text-center">
                <div class="spacer-10"></div>
                <h2>Aucun résultat trouvé avec : vide </h2>
            </div>

            <?php
        }
    ?>

    <div class="spacer-60"></div>
<?php require_once ("View/EndBody.php"); ?>