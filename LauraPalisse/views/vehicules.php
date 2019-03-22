<?php
require_once __DIR__ . '/header.php';
$vehiculeManager = new Manager\VehiculeManager();
$conducteurs = $vehiculeManager->findAll();
?>

<h1>Les Véhicules</h1>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Marque</th>
            <th>Modele</th>
            <th>Couleur</th>
            <th>Immatriculation</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($vehicules as $vehicule) : ?>
            <tr>
                <td><?= $vehicule->getId(); ?></td>
                <td><?= $vehicule->getMarque(); ?></td>
                <td><?= $vehicule->getModele(); ?></td>
                <td><?= $vehicule->getCouleur(); ?></td>
                <td><?= $vehicule->getImmatriculation(); ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php


require_once __DIR__ . '/footer.php';
?>