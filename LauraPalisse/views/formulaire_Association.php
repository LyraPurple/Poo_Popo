<?php 


$association = new \Entity\AssociationVehiculeConducteur();

$association->hydrate($_POST);

if ($association->isValid()) {
    $associationManager = new Manager\AssociationVehiculeConducteurManager();
    $associationManager->add($association);
}
?>

<form class="form-inline">
  <label class="my-1 mr-2" for="assoc_conducteur">Conducteur</label>
  <select class="custom-select my-1 mr-sm-2" name="assoc_conducteur" id="assoc_conducteur">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>

  <label class="my-1 mr-2" for="assoc_vehicule">Véhicule</label>
  <select class="custom-select my-1 mr-sm-2" name="assoc_vehicule" id="assoc_vehicule">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>

  <button type="submit" class="btn btn-primary my-1">Ajouter</button>
</form>