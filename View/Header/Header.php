
<header class="navbar">
    <section class="navbar-section">
        <a href="?controller=CV" class="navbar-brand mr-2">EasyFolio</a>
    <section class="navbar-center">
        <!-- centered logo or brand -->
    </section>

        <?php
            if (isConnected()) {
                ?>
                <section class="navbar-section">
                    <a href="?controller=Account&action=Account" class="btn btn-link">Mon compte</a>
                    <a href="?controller=Account&action=Disconnect" class="btn btn-link">Se déconnecter</a>
                </section>
                <?php
            } else {
                ?>
                <section class="navbar-section">
                    <a href="?controller=Account&action=Register" class="btn btn-link">Créer un compte</a>
                    <a href="?controller=Account&action=Login" class="btn btn-link">Se connecter</a>
                </section>
                <?php
            }
        ?>

</header>