<?php

class secteur{

    private $id;
    private $libelle;

    /**
     * secteur constructor.
     * @param $id
     * @param $libelle
     */
    public function __construct($id, $libelle)
    {
        $this->id = $id;
        $this->libelle = $libelle;
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
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }


}