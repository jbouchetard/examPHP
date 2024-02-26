<?php
require_once('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->setTemplateDir('templates');


// $smarty->assign('title', 'Mon premier template Smarty');
// $smarty->assign('header', 'Bienvenue sur mon site');
// $smarty->assign('content', 'Ceci est le contenu de la page');
// $smarty->assign("age", '25');
// $tableau = array(
//     array('nom' => 'testNom', 'prenom' => 'testPrenom'),
//     array('nom' => 'ceciEstUnNom', 'prenom' => 'testPrenom'),
//     array('nom' => 'pasUnNom', 'prenom' => 'testPrenom')
// );
// $smarty->assign('utilisateurs', $tableau);
$smarty->display('index.tpl');
?>