<?php require_once ("View/Head.php"); ?>

    <div class="text-center">
        <div class="spacer-10"></div>
        <h1>Créer un compte</h1>
        <div class="spacer-2"></div>
    </div>

    <div class="container">
        <div class="columns">
            <div class="col-4"></div>
            <div class="col-4">


                <div class="form-group">

                    <label for="name" class="form-label">Nom</label>
                    <input type="text" id="name" class="form-input" placeholder="Nom" required>
                    <p class="form-input-hint invisible" id="hint">Cette adresse mail est invalide.</p>

                    <label for="surname" class="form-label">Prénom</label>
                    <input type="text" id="surname" class="form-input" placeholder="Prénom" required>
                    <p class="form-input-hint invisible" id="hintEmail">Cette adresse mail est invalide.</p>

                    <label class="form-label" for="email">Email</label>
                    <input class="form-input" type="email" id="email" placeholder="Adresse mail" required>
                    <p class="form-input-hint invisible" id="hintEmail">Cette adresse mail est invalide.</p>

                    <label class="form-label" for="password">Mot de passe</label>
                    <input class="form-input" type="password" id="password" placeholder="Mot de passe" required>
                    <p class="form-input-hint invisible" id="hintPassword">Ce mot de passe est invalide.</p>

                    <label class="form-label" for="password2">Verification du mot de passe</label>
                    <input class="form-input " type="password" id="password2" placeholder="Mot de passe" required>
                    <p class="form-input-hint invisible" id="hintPassword2">Ce mot de passe est invalide.</p>





                    <button class=" btn btn-primary input-group-btn stick-right" id="btn">Valider</button>
                </div>

            </div>
            <div class="col-4"></div>
        </div>

    </div>


    <div class="spacer-60"></div>

    <script type="text/javascript" src="JS/Account/RegisterScript.js"></script>

<?php require_once ("View/EndBody.php"); ?>