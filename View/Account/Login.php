<?php require_once ("View/Head.php"); ?>


    <div class="text-center">
        <div class="spacer-10"></div>
        <h1>Se connecter</h1>
        <div class="spacer-2"></div>


    </div>
    <div class="container">
        <div class="columns">
            <div class="col-4">
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-input" type="email" id="email" placeholder="Adresse mail" required>
                    <p class="form-input-hint invisible" id="hintEmail">Cette adresse mail est invalide.</p>
                    <div class="spacer-1"></div>

                    <label class="form-label" for="password">Mot de passe</label>
                    <input class="form-input" type="password" id="password" placeholder="Mot de passe" required>
                    <p class="form-input-hint invisible" id="hintPassword">Ce mot de passe est invalide.</p>
                    <div class="spacer-2"></div>
                    <button class=" btn btn-primary input-group-btn float-right" id="btn">Se connecter</button>
                </div>
            </div>
            <div class="col-4">
            </div>
        </div>

    </div>


    <div class="spacer-60"></div>

    <script type="text/javascript" src="JS/Account/LoginScript.js"></script>
<?php require_once ("View/EndBody.php"); ?>
