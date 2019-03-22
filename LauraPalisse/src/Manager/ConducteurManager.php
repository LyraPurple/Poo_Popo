<?php

namespace Manager;


class ConducteurManager
{
    /**
     * Tableau de class de tout les conducteurs 🛴
     */
    public function findAll()
    {
        return \Database::getInstance()->query('SELECT * FROM conducteur')->fetchAll(\PDO::FETCH_CLASS, \Entity\Conducteur::class);
    }

    /**
     * Ajoutay ouno conductaro dans la Basa de las Donnas 🎈
     */
    public function add($conducteur)
    {
        $sql = 'INSERT INTO `vtc`.`conducteur` (`prenom`, `nom`) VALUES (:prenom, :nom)';
        $query = \Database::getInstance()->prepare($sql);

        $query->bindValue(':prenom', $conducteur->getPrenom());
        $query->bindValue(':nom', $conducteur->getNom());

        return $query->execute();
    }
}
