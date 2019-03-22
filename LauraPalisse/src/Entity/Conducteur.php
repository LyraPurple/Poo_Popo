<?php

namespace Entity;

class Conducteur
{
    private $id;
    private $prenom;
    private $nom;
    
    public function getId()
    {
        return $this->id;
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
     * On passe les données de $_POST dans l'instance Conducteur
     */
    public function hydrate($parametresConduct)
    {
        if (empty($parametresConduct)) {
            return;
        }
        
        // On hydrate
        $this->prenom = trim($parametresConduct['prenom']);
        $this->nom = trim($parametresConduct['nom']);
    }
    /**
     * On vérifie que les données de le conducteur soient valides
     */
    public function isValid()
    {
        $valid = true;
        
        if (strlen($this->prenom) < 2) {
            $valid = false;
        }
        
        if (strlen($this->nom) < 2) {
            $valid = false;
        }
        
        return $valid;
    }
}