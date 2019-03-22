<?php

namespace Manager;

/**
 * Cette classe me permet de gérer les acteurs.
 */
class VehiculeManager
{
    /**
     * Tableau de class de todos los véhiculos 🛴
     */
    public function findAll()
    {
        return \Database::getInstance()->query('SELECT * FROM vehicule')->fetchAll(\PDO::FETCH_CLASS, \Entity\vehicule::class);
    }

    /**
     * Ajoutay ouno véhiculôw dans la Basa de las Donnas 
     */
    public function add($vehicule)
    {
        $sql = 'INSERT INTO `vtc`.`vehicule` (`marque`, `model`, `couleur`, `immatriculation`) VALUES (:marque, :model, :couleur, :immatriculation)';
        $query = \Database::getInstance()->prepare($sql);

        $query->bindValue(':marque', $vehicule->getMarque());
        $query->bindValue(':model', $vehicule->getModel());
        $query->bindValue(':couleur', $vehicule->getCouleur());
        $query->bindValue(':immatriculation', $vehicule->getImmatriculation());

        return $query->execute();
    }
}

