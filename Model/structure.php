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

        /**
         * structure constructor.
         * @param $id
         * @param $nom
         * @param $rue
         * @param $cp
         * @param $ville
         * @param $estasso
         * @param $nb_donateurs
         * @param $nb_actionnaires
         */
        public function __construct($id, $nom, $rue, $cp, $ville, $estasso, $nb_donateurs, $nb_actionnaires)
        {
            $this->id = $id;
            $this->nom = $nom;
            $this->rue = $rue;
            $this->cp = $cp;
            $this->ville = $ville;
            $this->estasso = $estasso;
            $this->nb_donateurs = $nb_donateurs;
            $this->nb_actionnaires = $nb_actionnaires;
        }


        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getNom()
        {
            return $this->nom;
        }

        /**
         * @param mixed $nom
         */
        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        /**
         * @return mixed
         */
        public function getRue()
        {
            return $this->rue;
        }

        /**
         * @param mixed $rue
         */
        public function setRue($rue)
        {
            $this->rue = $rue;
        }

        /**
         * @return mixed
         */
        public function getCp()
        {
            return $this->cp;
        }

        /**
         * @param mixed $cp
         */
        public function setCp($cp)
        {
            $this->cp = $cp;
        }

        /**
         * @return mixed
         */
        public function getVille()
        {
            return $this->ville;
        }

        /**
         * @param mixed $ville
         */
        public function setVille($ville)
        {
            $this->ville = $ville;
        }

        /**
         * @return mixed
         */
        public function getEstasso()
        {
            return $this->estasso;
        }

        /**
         * @param mixed $estasso
         */
        public function setEstasso($estasso)
        {
            $this->estasso = $estasso;
        }

        /**
         * @return mixed
         */
        public function getNbDonateurs()
        {
            return $this->nb_donateurs;
        }

        /**
         * @param mixed $nb_donateurs
         */
        public function setNbDonateurs($nb_donateurs)
        {
            $this->nb_donateurs = $nb_donateurs;
        }

        /**
         * @return mixed
         */
        public function getNbActionnaires()
        {
            return $this->nb_actionnaires;
        }

        /**
         * @param mixed $nb_actionnaires
         */
        public function setNbActionnaires($nb_actionnaires)
        {
            $this->nb_actionnaires = $nb_actionnaires;
        }


    }