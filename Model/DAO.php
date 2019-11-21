<?php
require_once ("secteur.php");
require_once ("structure.php");
require_once ("secteurs_structures.php");


$dao = new DAO();

class DAO{
    private $pdo;

    /**
     * DAO constructor.
     */
    public function __construct()
    {
        try{
            $database_name = "projet_php_base";
            $server = "localhost";
            $user = "root";
            $pass = "";
            $this->pdo = new PDO("mysql:host=$server;dbname=$database_name", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $exception){
            die("erreur de connexion:".$exception->getMessage());
        }
    }

    public function getSecteurs() : array{
        $req = "SELECT * FROM secteur" ;
        $std = ($this->pdo)->query($req);
        $res = $std->fetchAll(PDO::FETCH_CLASS,"Secteur");
        var_dump($res);
        if(count($res)>0){
            return $res;

        }
        else{
            return array();
        }

    }

    public function getSecteurById($id) : Secteur{
        $req = "SELECT * FROM secteur WHERE id = '$id'";//sélectonne un secteur correspond à l'identification id rentrer en paramètre
        $lignereq =($this->pdo)->query($req);
        if($lignereq){
            $result =$lignereq->fetchAll(PDO::FETCH_CLASS,'Secteur');
            var_dump($result);
            if(count($result)>0){
                return $result[0];
            }
            else{
                return new Secteur();
            }
        }else{
            return new Secteur();//on renvoie un nouveaux objet secteur vide si la recherche dans la base de donnée à échouer
        }
    }
    
    function insertSecteur( string $libelle){
        $req = "INSERT INTO secteur(libelle) VALUES ('$libelle')";
        ($this->pdo)->exec($req);
    }

    function deleteSecteur(int $id) {
        // supprimerPage de numéro $numero
        // ET décaler toutes les autres pages de -1 !
        $req = "DELETE FROM secteur WHERE id=$id";
         ($this->pdo)->exec($req);

    }

    function getStructureById($id) : Structure{
        $req = "SELECT * FROM structure WHERE id = '$id'";//sélectonne un secteur correspond à l'identification id rentrer en paramètre
        $lignereq =($this->pdo)->query($req);
        if($lignereq){
            $result =$lignereq->fetchAll(PDO::FETCH_CLASS,'Structure');
            var_dump($result);
            if(count($result)>0){
                return $result[0];
            }
            else{
                return new Structure();
            }
        }else{
            return new Structure();//on renvoie un nouveaux objet secteur vide si la recherche dans la base de donnée à échouer
        }
    }

    function getStructures() : array{
        $req = "SELECT * FROM structure" ;
        $std = ($this->pdo)->query($req);
        $res = $std->fetchAll(PDO::FETCH_CLASS,"Structure");
        var_dump($res);
        if(count($res)>0){
            return $res;

        }
        else{
            return array();
        }
    }

    function insertStructure($nom,$rue,$cp,$ville,$estasso,$nb){
        if($estasso == 1){
            $req = "INSERT INTO Structure(id,nom,rue,cp,ville,estasso,) VALUES ('$id','$mdp','$mail')";
        }

        $lignereq =($this->db)->exec($req);;
    }
}