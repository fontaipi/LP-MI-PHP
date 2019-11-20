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
            $this->pdo = new PDO("mysql:host=$server;dbname=$database", $user, $pass);
        }
        catch (PDOException $exception){
            die("erreur de connexion:".$exception->getMessage());
        }
    }

    public function getSecteurById($id) : Secteur{
        $req = "SELECT * FROM secteur WHERE id = '$id'";//sélectonne un secteur correspond à l'identification id rentrer en paramètre
        $lignereq =($this->db)->query($req);
        if($lignereq){
            $result =$lignereq->fetchAll(PDO::FETCH_CLASS,'Secteur');
            if(count($result)>0){
                return $result[0];
            }
            else{
                return new Secteur();
            }
        }else{
            return new Secteur();//on renvoie un nouveaux objet utilisateur vide si la recherche dans la base de donnée à échouer
        }
    }


}