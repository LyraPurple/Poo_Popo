<?php 


$vehicule = new Entity\Vehicule();

$vehicule->hydrate($_POST);

if ($vehicule->isValid()) {
    $vehiculeManager = new Manager\VehiculeManager();
    $vehiculeManager->add($vehicule);
}
?>

<form method="post" action="">
    <div class="form-group">
        <label for="marque">Marque :</label>
        <input type="text" name="marque" id="marque" class="form-control">
    </div>
    <div class="form-group">
        <label for="modele">Môwdèle :</label>
        <input type="text" name="modele" id="modele" class="form-control">
    </div>
    <div class="form-group">
        <label for="couleur">Couleur :</label>
        <input type="text" name="couleur" id="couleur" class="form-control">
    </div>
    <div class="form-group">
        <label for="immatriculation">Immatriculation :</label>
        <input type="text" name="immatriculation" id="immatriculation" class="form-control">
    </div>

    <button class="btn btn-primary btn-block">Ajouter</button>
</form>