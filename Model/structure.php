<?php

    class structure{
        private $id;
        private $nom;
        private $rue;
        private $cp;
        private $ville;
        private $estasso;
        private $nb_donateurs;
        private $nb_actionnaires;

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


