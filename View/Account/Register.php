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

                    <div class="toast toast-error invisible" id="errorToast">
                        <button class="btn btn-clear float-right" id="errorToastButton"></button>
                        Une erreur c'est produite, veuillez verifier vos champs.
                    </div>
                    <div class="spacer-1"></div>

                    <label for="name" class="form-label">Nom</label>
                    <input type="text" id="name" class="form-input" placeholder="Nom" min="3" required>
                    <p class="form-input-hint invisible" id="hintName"></p>

                    <label for="surname" class="form-label">Prénom</label>
                    <input type="text" id="surname" class="form-input" placeholder="Prénom" min="3" required>
                    <p class="form-input-hint invisible" id="hintSurname"></p>

                    <label for="birthdate" class="form-label">Date de naissance</label>
                    <input type="date" id="birthdate" class="form-input" >
                    <p class="form-input-hint invisible" id="hintBirthdate"></p>


                    <label for="address" class="form-label">Adresse postale</label>
                    <input type="text" id="address" class="form-input" placeholder="Adresse postale" min="6" required>
                    <p class="form-input-hint invisible" id="hintAddress"></p>

                    <label for="phoneNumber" class="form-label">Numéro de téléphone</label>
                    <div class="input-group">
                        <span class="input-group-addon">+33</span>
                        <input type="text" id="phoneNumber" class="form-input" placeholder="Numéro de téléphone" required>
                    </div>
                    <p class="form-input-hint invisible" id="hintPhoneNumber"></p>

                    <label class="form-label" for="email">Email</label>
                    <input class="form-input" type="email" id="email" placeholder="Adresse mail" min="6" required>
                    <p class="form-input-hint invisible" id="hintEmail"></p>

                    <label class="form-label" for="password">Mot de passe</label>
                    <input class="form-input" type="password" id="password" placeholder="Mot de passe" min="9" required>
                    <p class="form-input-hint invisible" id="hintPassword"></p>

                    <label class="form-label" for="password2">Verification du mot de passe</label>
                    <input class="form-input " type="password" id="password2" placeholder="Mot de passe" min="9" required>
                    <p class="form-input-hint invisible" id="hintPassword2"></p>




                    <button class=" btn btn-primary input-group-btn float-right" id="btn">Valider</button>
                </div>

            </div>
            <div class="col-4"></div>
        </div>

    </div>


    <div class="spacer-60"></div>

    <script type="text/javascript" src="JS/Account/RegisterScript.js"></script>

<?php require_once ("View/EndBody.php"); ?>