<?php 


$conducteur = new Entity\Conducteur();

$conducteur->hydrate($_POST);

if ($conducteur->isValid()) {
    $conducteurManager = new Manager\ConducteurManager();
    $conducteurManager->add($conducteur);
}
?>

<form method="post" action="">
    <div class="form-group">
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom" class="form-control">
    </div>
    <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" class="form-control">
    </div>

    <button class="btn btn-primary btn-block">Ajouter</button>
</form>