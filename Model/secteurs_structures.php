<?php

class secteurs_structures{

    private $id;
    private $id_structure;
    private $id_secteur;

    public function __construct(array $tab = NULL){//nécessaire pour les test unitaire
        if($tab != NULL){
            foreach ($tab as $key => $value) {
                $this->$key = $value;
            }
        }
    }
    function __get(string $property){
        return $this->$property;
    }
}



