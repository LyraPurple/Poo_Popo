<?php
namespace Entity;
class AssociationVehiculeConducteur
{
    private $idAssociation;
    private $id_vehicule;
    private $marque;
    private $modele;
    private $couleur;
    private $immatriculation;
    private $id_conducteur;
    private $prenom;
    private $nom;
 
        
    public function getIdAssociation()
    {
        return $this->idAssociation;
    }

    public function getId_vehicule()
    {
        return $this->id_vehicule;
    }
        
    public function getMarque()
    {
        return $this->marque;
    }
        
    public function getModele()
    {
        return $this->modele;
    }
        
    public function getCouleur()
    {
        return $this->couleur;
    }
        
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }
    
    public function getId_conducteur()
    {
        return $this->id_conducteur;
    }
    
    public function getPrenom()
    {
        return $this->prenom;
    }
    
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * On passe les données de $_POST dans l'instance AssociationVehiculeConducteur
     */
    public function hydrate($parametresVehic)
    {
        if (empty($parametresVehic)) {
            return;
        }
        // On hydrate
        $this->id_vehicule = intval($parametresConduct['id_vehicule']);
        $this->id_conducteur = intval($parametresConduct['id_conducteur']);
    }
    /**
     * On vérifie que les données de la AssociationVehiculeConducteur soient valides
     */
    public function isValid()
    {
        $valid = true;
        if ($this->id_vehicule < 0) {
            return false;
        }
        if ($this->id_conducteur < 0) {
            return false;
        }
        return $valid;
    }
}