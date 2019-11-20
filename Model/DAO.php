<?php
require_once ("secteur.php");
require_once ("structure.php");
require_once ("secteurs_structures.php");
$database_name = "projet_php_base";
$server = "localhost";
$user = "root";
$pass = "";


class DAO{
    private $pdo;

    /**
     * DAO constructor.
     */
    public function __construct($database,$server,$user,$pass)
    {
        try{
            $this->pdo = new PDO();
        }
        catch (PDOException $exception){

        }
    }


}