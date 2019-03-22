<?php
namespace Manager;
class AssociationVehiculeConducteurManager
{
    /**
     * Tableau de class de toutes les associations 🛴

     */public function findAll()
{
    return \Database::getInstance()->query('SELECT * FROM association_vehicule_conducteur ' .
        'INNER JOIN vehicule ON association_vehicule_conducteur.id_vehicule=vehicule.id_vehicule ' .
        'INNER JOIN conducteur ON association_vehicule_conducteur.id_conducteur=conducteur.id_conducteur')->fetchAll(\PDO::FETCH_CLASS, \Entity\AssociationVehiculeConducteur::class);
}
    /**
     * Ajoutay ouna associacion dans la Basa de las Donnas 🎈
     */
    public function add($association)
    {
        $sql = 'INSERT INTO `vtc`.`association_vehicule_conducteur` (`id_vehicule`, `id_conducteur`) VALUES (:id_vehicule, :id_conducteur)';
        $query = \Database::getInstance()->prepare($sql);
        $query->bindValue(':id_vehicule', $association->getId_vehicule());
        $query->bindValue(':id_conducteur', $association->getId_conducteur());
        return $query->execute();
    }
}