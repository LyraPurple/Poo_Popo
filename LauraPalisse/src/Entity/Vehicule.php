<?php
namespace Entity;
class Vehicule
{
    private $id;
    private $marque;
    private $modele;
    private $couleur;
    private $immatriculation;
        
    public function getId()
    {
        return $this->id;
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

    /**
     * On passe les données de $_POST dans l'instance Vehicule
     */
    public function hydrate($parametresVehic)
    {
        if (empty($parametresVehic)) {
            return;
        }
        // On hydrate
        $this->marque = trim($parametresConduct['marque']);
        $this->modele = trim($parametresConduct['modele']);
        $this->couleur = trim($parametresConduct['couleur']);
        $this->immatriculation = trim($parametresConduct['immatriculation']);
    }
    /**
     * On vérifie que les données de le Vehicule soient valides
     */
    public function isValid()
    {
        $valid = true;

        if (strlen($this->marque) < 2) {
            $valid = false;
        }

        if (strlen($this->modele) < 2) {
            $valid = false;
        }

        if (strlen($this->couleur) < 2) {
            $valid = false;
        }

        if (!preg_match('/^[A-Z]{2}-\\d{3}-[A-Z]{2}$/', $this.immatriculation)) {
            $valid = false;
        }

        return $valid;
    }
}