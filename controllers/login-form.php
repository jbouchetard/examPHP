<?php
// Page inaccessible si la personne est connecté
session_start();
require_once('inc/functions.php');
require_once('inc/db.php');
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
                setcookie('email', $verif['email'],(time()+120));
                setcookie('secure', $verif['password'],(time()+120));
                $token = creationToken();
            }else
            {
                echo "Mauvais mot de passe";
            }
        }
    }
}
?>