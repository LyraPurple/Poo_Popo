<?php
require_once __DIR__ . '/header.php';

/* 


$associationVCManager = new \Manager\AssociationVehiculeConducteurManager();
$associations = $associationVCManager->findAll(); 
*/


$association = new Entity\AssociationVehiculeConducteur();
$association->hydrate($_POST);
if ($association->isValid())
{
    $associationVCManager = new \Manager\AssociationVehiculeConducteurManager();
    if ($associationVCManager->add($association))
    {
        echo '<div class="alert alert-success">Association ajoutée.</div>';
    }
}
?>

<h1>Les Associations de les conducteurs et de les véhicules</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID_Association</th>
            <th>Conducteur</th>
            <th>Vehicule</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($associations as $association) : ?>
            <tr>
            <td><?= $association->getId_association(); ?></td>
                <td><?= $association->getMarque() . ' ' .$association->getModele() . '<br/>' .$association->getId_vehicule(); ?></td>
                <td><?= $association->getPrenom() . ' ' .$association->getNom() . '<br/> ' .$association->getId_conducteur(); ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php
require_once __DIR__ . '/formulaire_Association.php.php';
require_once __DIR__ . '/footer.php';
?>