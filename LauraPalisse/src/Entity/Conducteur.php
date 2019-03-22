<?php

namespace Entity;

class Conducteur
{
    private $id;

    public function getId()
    {
        return $this->id;
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
    }

    /**
     * On vérifie que les données de le conducteur soient valides
     */
    public function isValid()
    {
        $valid = true;


        return $valid;
    }
}
