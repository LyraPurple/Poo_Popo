<?php

namespace Entity;

class Vehicule
{
    private $id;

    public function getId()
    {
        return $this->id;
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
    }

    /**
     * On vérifie que les données de le Vehicule soient valides
     */
    public function isValid()
    {
        $valid = true;


        return $valid;
    }
}
