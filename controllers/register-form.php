<?php
// Page inaccessible si la personne est connecté

require_once('inc/db.php');
if(isset($_POST['submit']))
{
    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirm-password']) && $_POST['password'] === $_POST['confirm-password'])
    {
        $email_exist = $_POST['username'];
        $sql = $db -> prepare("SELECT * FROM utilisateurs WHERE email=?");
        $sql -> execute([$email_exist]);
        $verifEmail = $sql ->fetch();
        if ($verifEmail)
        {
            echo "email déja existant";
        }else
        {
            $email_user = $db-> quote($_POST['username']);
            $password_user = $db-> quote(password_hash($_POST['password'], PASSWORD_DEFAULT));
            $sql = $db -> prepare("INSERT INTO utilisateurs SET
                email = $email_user,
                password = $password_user");
                if($sql-> execute())
                {
                    require 'C:\laragon\www\examPHP\examphp\mail.php';
                }else
                {
                    echo "veuillez reessayer";
                }    
        }
    }else
    {
        echo "Veuillez entrer des mots de passes identiques";
    }      
}
?>