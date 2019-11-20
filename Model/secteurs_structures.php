<?php

class secteurs_structures{

    private $id;
    private $id_structure;
    private $id_secteur;

    /**
     * secteurs_structures constructor.
     * @param $id
     * @param $id_structure
     * @param $id_secteur
     */
    public function __construct($id, $id_structure, $id_secteur)
    {
        $this->id = $id;
        $this->id_structure = $id_structure;
        $this->id_secteur = $id_secteur;
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
    public function getIdStructure()
    {
        return $this->id_structure;
    }

    /**
     * @param mixed $id_structure
     */
    public function setIdStructure($id_structure)
    {
        $this->id_structure = $id_structure;
    }

    /**
     * @return mixed
     */
    public function getIdSecteur()
    {
        return $this->id_secteur;
    }

    /**
     * @param mixed $id_secteur
     */
    public function setIdSecteur($id_secteur)
    {
        $this->id_secteur = $id_secteur;
    }

    

}