<!DOCTYPE html>
<html lang="fr">
<head>
<!--    -------Adresse de le site -------
        http://localhost/examen_final/LauraPalisse/
        -------Adresse de le site -------  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La taksa ekzameno</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div>🛴</div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                    $scheme = $_SERVER['REQUEST_SCHEME']; // http
                    $host = $_SERVER['SERVER_NAME']; // localhost
                    $path = $_SERVER['SCRIPT_NAME']; // /examen_final/LauraPalisse/public/index.php
                    $baseUrl = $scheme.'://'.$host.$path;
                ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $baseUrl; ?>/conducteur">Conducteurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $baseUrl; ?>/vehicule">Véhicules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $baseUrl; ?>/association">Association</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
