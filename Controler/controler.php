<?php
include_once("../Model/DAO.php");

include_once ("../Model/secteur.php");

$res = $dao->deleteSecteur(2);
echo $res;

