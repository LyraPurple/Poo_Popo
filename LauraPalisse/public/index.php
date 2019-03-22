<?php

require_once __DIR__ . '/../config/autoload.php';

$uri = $_SERVER['PATH_INFO'] ?? '/';

// Pour de les belles adresses bieng claireuh 🤓
if ($uri === '/') {
    require_once __DIR__ . '/../views/conducteurs.php';
} 
else if ($uri === '/conducteur') {
    require_once __DIR__ . '/../views/conducteurs.php';
} 
else if ($uri === '/vehicule') {
    require_once __DIR__ . '/../views/vehicules.php';
} 
else if ($uri === '/association') {
    require_once __DIR__ . '/../views/association_vehicules_conducteurs.php';
}