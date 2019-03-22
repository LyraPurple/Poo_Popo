<?php

require_once __DIR__ . '/../config/autoload.php';

$uri = $_SERVER['PATH_INFO'] ?? '/';

// Pour de les belles adresses bieng claireuh 🤓
if ($uri === '/') {
    require_once __DIR__ . '/../views/home.php';
} else if ($uri === '/acteurs') {
    require_once __DIR__ . '/../views/voitures.php';
} else if ($uri === '/films/acteurs') {
    require_once __DIR__ . '/../views/conducteurs.php';
} else if ($uri === '/acteurs') {
    require_once __DIR__ . '/../views/association_vehicule_conducteur.php';
}
