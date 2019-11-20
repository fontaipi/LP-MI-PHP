<?php

class secteur{

    private $id;
    private $libelle;

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


