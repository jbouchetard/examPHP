<?php
// Page inaccessible si la personne est connecté
session_start();
require_once('C:\laragon\www\examPHP\examphp\inc\db.php');
if(isset($_POST['submit']))
{
    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        $email_connect = $_POST['username'];
        $sql = $db -> prepare("SELECT * FROM utilisateurs WHERE email=?");
        $sql -> execute([$email_connect]);
        $verif = $sql ->fetch(PDO::FETCH_ASSOC);
        if ($verif)
        {
            if(password_verify($_POST['password'], $verif['password']))
            {
                echo "vous voila connecté";
            }else
            {
                echo "Mauvais mot de passe";
            }
        }
    }
}
?>