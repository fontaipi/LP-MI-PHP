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
            $secteur  = $dao->getSecteurById($secteurID->ID);
            array_push($element,$structure);
            array_push($element,$secteur);
        array_push($listeAffichage,$element);
    }

    include_once ("../View/search.view.php");