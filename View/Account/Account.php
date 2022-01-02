<?php require_once("View/Head.php"); ?>

<div class="text-center">
    <div class="spacer-10"></div>
    <h1><?= $title;?></h1>
    <div class="spacer-2"></div>
</div>

<div class="container">
    <div class="columns">
        <div class="col-4">
        </div>
        <div class="col-4">
            <img width="150" height="150" <?= 'src="'.$profilPicture.'"'; ?> alt="">
            <h2><?=$name . " " . $surname?></h2>

        </div>
        <div class="col-4">
        </div>
    </div>
</div>
<div class="container">
    <div class="columns">
        <div class="col-4">
        </div>
        <div class="col-4">
            <button>Mes informations</button>
            <button>Mes CV</button>
            <button>Mes etudes</button>
            <button>Mes competences</button>
            <button>Mes projets</button>
        </div>
        <div class="col-4">
        </div>
    </div>
</div>
<div class="spacer-10"></div>

<?php require_once ("View/EndBody.php"); ?>
