<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="JS/CV/SearchScript.js"></script>

    <link rel="stylesheet" href="dist/spectre.min.css">
    <link rel="stylesheet" href="dist/spectre-exp.min.css">
    <link rel="stylesheet" href="dist/spectre-icons.min.css">

    <title>EasyFolio</title>
</head>
<body>

    <?php require_once ("View/Header/Header.php"); ?>

    <div class="text-center">
        <h1>EasyFolio</h1>
        <div class="form-group mg-3">
            <input type="text" name="query" placeholder="C++">
            <button class="btn btn-primary input-group-btn" id="searchButton">Rechercher</button>
        </div>
    </div>




    <?php require_once("View/Footer/Footer.php") ?>

</body>
</html>
