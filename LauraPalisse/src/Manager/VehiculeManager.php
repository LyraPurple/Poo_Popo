<?php

namespace Manager;

/**
 * Cette classe me permet de gérer les acteurs.
 */
class ActorManager
{
    /**
     * Tableau de class de todos los véhiculos 🛴
     */
    public function findAll()
    {
        return \Database::getInstance()->query('SELECT * FROM actor')->fetchAll(\PDO::FETCH_CLASS, \Entity\Actor::class);
    }

    /**
     * Ajoutay ouno véhiculôw dans la Basa de las Donnas 
     */
    public function add($actor)
    {
        $sql = 'INSERT INTO `vtc`.`vehicule` (`marque`, `model`, `couleur`, `immatriculation`) VALUES (:marque, :model, :couleur, :immatriculation)';
        $query = \Database::getInstance()->prepare($sql);

        $query->bindValue(':marque', $actor->getMarque());
        $query->bindValue(':model', $actor->getModel());
        $query->bindValue(':couleur', $actor->getCouleur());
        $query->bindValue(':immatriculation', $actor->getImmatriculation());

        return $query->execute();
    }
}

