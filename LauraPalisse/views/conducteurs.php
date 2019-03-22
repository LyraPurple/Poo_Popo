<?php
require_once __DIR__ . '/header.php';
$conducteurManager = new Manager\ConducteurManager();
$conducteurs = $conducteurManager->findAll();
?>

<h1>Les Conducteurs</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Prenom</th>
            <th>Nom</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($conducteurs as $conducteur) : ?>
            <tr>
                <td><?= $conducteur->getId(); ?></td>
                <td><?= $conducteur->getPrenom(); ?></td>
                <td><?= $conducteur->getNom(); ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php
require_once __DIR__ . '/footer.php';
?>