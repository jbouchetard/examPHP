<?php
// Page accessible uniquement aux personnes connectées
require_once('autoload.php');
$fichier = file_get_contents('template/index.tpl');
echo $fichier;
?>