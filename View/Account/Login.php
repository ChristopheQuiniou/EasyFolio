<?php require_once ("View/Head.php"); ?>


    <div class="text-center">
        <div class="spacer-10"></div>
        <h1>Se connecter</h1>
        <div class="spacer-2"></div>

        <div class="form-group mg-3">
            <input type="email" id="email" placeholder="Adresse mail" required> <br>
            <input type="password" id="password" placeholder="Mot de passe" required> <br>
            <button class="btn btn-primary input-group-btn" id="btn">Se connecter</button>
        </div>

    </div>

    <div class="spacer-60"></div>

    <script type="text/javascript" src="JS/Account/LoginScript.js"></script>
<?php require_once ("View/EndBody.php"); ?>
