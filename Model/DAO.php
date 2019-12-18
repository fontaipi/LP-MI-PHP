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

    function deleteSecteur(int $id) : string {
        try{
            $req1 = "DELETE FROM secteurs_structures WHERE id_secteur = $id";
            ($this->pdo)->exec($req1);
            $req = "DELETE FROM secteur WHERE id=$id";
            ($this->pdo)->exec($req);
            return "Supression bien effectuer";
        }
        catch (PDOException $exception){
               return "Code error : " + $exception->getMessage();
        }
    }

    function updateSecteur($id,$libelle){
        $req = "UPDATE secteur SET libelle = $libelle WHERE id=$id";
    }

    function getStructureById($id) : Structure{
        $req = "SELECT * FROM structure WHERE id = '$id'";//sélectonne un secteur correspond à l'identification id rentrer en paramètre
        $lignereq =($this->pdo)->query($req);
        if($lignereq){
            $result =$lignereq->fetchAll(PDO::FETCH_CLASS,'Structure');

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

        if(count($res)>0){
            return $res;

        }
        else{
            return array();
        }
    }

    function insertStructure($nom,$rue,$cp,$ville,$estasso,$nb){
        if($estasso == 1){
            $req = "INSERT INTO Structure(nom,rue,cp,ville,estasso,nb_donateurs) VALUES ('$nom','$rue','$cp','$ville','$estasso','$nb')";
        }
        else{
            $req = "INSERT INTO Structure(nom,rue,cp,ville,estasso,nb_actionnaires) VALUES ('$nom','$rue','$cp','$ville','$estasso','$nb')";
        }

        ($this->pdo)->exec($req);;
    }

    function deleteStructure(int $id) : string {
        try{
            $req1 = "DELETE FROM secteurs_structures WHERE id_structure = $id";
            ($this->pdo)->exec($req1);
            $req = "DELETE FROM structure WHERE id=$id";
            ($this->pdo)->exec($req);
            return "Supression bien effectuer";
        }
        catch (PDOException $exception){
            return "Code error : " + $exception->getMessage();
        }
    }

    function updateStructure($id,$nom,$rue,$cp,$ville,$estasso,$nb){
        if($estasso == 1){
            $req = "UPDATE structure SET nom = $nom , rue= $rue,cp= $cp, ville= $ville , estasso = $estasso , nb_donnateurs = $nb WHERE id =$id ";
        }
        else{
            $req = "UPDATE structure SET nom = $nom , rue= $rue,cp= $cp, ville= $ville , estasso = $estasso , nb_actionnaires = $nb WHERE id =$id ";
        }

        ($this->db)->exec($req);;
    }

    function getSecteursStructuresById($id) : Secteurs_structures{
        $req = "SELECT * FROM secteurs_structures WHERE id = '$id'";
        $lignereq =($this->pdo)->query($req);
        if($lignereq){
            $result =$lignereq->fetchAll(PDO::FETCH_CLASS,'Secteurs_structures');

            if(count($result)>0){
                return $result[0];
            }
            else{
                return new Secteurs_structures();
            }
        }else{
            return new Secteurs_structures();
        }
    }

    function getSecteursStructuresByStructureID($id) : Secteurs_structures{
        $req = "SELECT * FROM secteurs_structures WHERE id_structure = '$id'";
        $lignereq =($this->pdo)->query($req);
        if($lignereq){
            $result =$lignereq->fetchAll(PDO::FETCH_CLASS,'Secteurs_structures');

            if(count($result)>0){
                return $result[0];
            }
            else{
                return new Secteurs_structures();
            }
        }else{
            return new Secteurs_structures();
        }
    }

    function getSecteursStructures() : array {
        $req = "SELECT * FROM secteurs_structures" ;
        $std = ($this->pdo)->query($req);
        $res = $std->fetchAll(PDO::FETCH_CLASS,"Secteurs_structures");

        if(count($res)>0){
            return $res;

        }
        else{
            return array();
        }
    }

    function insertSecteursStrutures($id_structure,$id_secteurs){
        $req = "INSERT INTO secteurs_structures(id_structure,id_secteurs) VALUES ('$id_structure','$id_secteurs')";
        ($this->pdo)->exec($req);
    }

    function deleteSecteursStrutures($id){
        try{
            $req = "DELETE FROM structure WHERE id=$id";
            ($this->pdo)->exec($req);
            return "Supression bien effectuer";
        }
        catch (PDOException $exception){
            return "Code error : " + $exception->getMessage();
        }
    }


}