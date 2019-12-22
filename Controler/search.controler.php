<?php
    include_once ("../Model/DAO.php");
    include_once ("../Model/structure.php");

    if (isset($_POST['submitFiltre'])) {
        if (isset($_POST['searchAsso']) && isset($_POST['searchEntreprise'])) {
            $listStructures = $dao->getStructures();


        } elseif (isset($_POST['searchEntreprise'])) {
            $listStructures = $dao->getStructureByType(0);

        } elseif (isset($_POST['searchAsso'])) {
            $listStructures = $dao->getStructureByType(1);

        }
    } else {
        $listStructures = $dao->getStructures();
    }
    $listeAffichage = [];
    foreach ($listStructures as $structure){
        $element = [];
        $secteurID = $dao->getSecteursStructuresByStructureID($structure->ID);
            $secteur  = $dao->getSecteurById($secteurID->ID);
            array_push($element,$structure);
            array_push($element,$secteur);
        array_push($listeAffichage,$element);
    }

if (isset($_POST['submit'])) {
    if (isset($_POST['idStructure'])) {$id = $_POST['idStructure'];}
    if (isset($_POST['libelle'])) {$libelle = $_POST['libelle'];}
    if (isset($_POST['rue'])) {$rue = $_POST['rue'];}
    if (isset($_POST['ville'])) {$ville = $_POST['ville'];}
    if (isset($_POST['cpostal'])) {$cpostal = $_POST['cpostal'];}
    if (isset($_POST['isAsso'])) {$isAsso = 1;} else {$isAsso = 0;}
    if (isset($_POST['nbMembre'])) {$nbMembre = (int)$_POST['nbMembre'];}
    if (isset($_POST['secteurs'])){$idSecteur = (int)$_POST['secteurs'] ;}
    if (isset($_POST['libelle']) && isset($_POST['rue']) && isset($_POST['ville']) && isset($_POST['cpostal'])  && isset($_POST['nbMembre'])) {

        $dao->updateStructure($id, $libelle, $rue, $cpostal, $ville, $isAsso, $nbMembre);
    }

    if($idSecteur != -1){

        $dao->updateSecteurStructureByStructureID($id,$idSecteur);
    }
}

    include_once ("../View/search.view.php");