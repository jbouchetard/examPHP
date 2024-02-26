
<?php
// Vos fonctions (token, traitement des fichiers etc...)
require_once('C:\laragon\www\examPHP\examphp\controllers\login-form.php');

function creationToken()
{
    if($_COOKIE['token'] !=1)
    {
        $caracteres = 'azertyuiopqsdfghjklmwxcvbn1234567890AZERTYUIOPQSDFGHJKLMWXCVBN,;:!1234567890';
        $mdp = '';
        for($i=0;$i<25;$i++)
        {
            $mdp.= $caracteres[rand(0,strlen($caracteres)-1)]; 
        }
        $_SESSION['token'] = $mdp;
        setcookie('token',1,(time()+900));
    }
}
function recupToken()
{
    if($_GET['token'] == $_SESSION['token'])
        return true;
    else
        return false;
}
?>