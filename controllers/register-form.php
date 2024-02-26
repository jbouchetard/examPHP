<?php
// Page inaccessible si la personne est connecté

require_once('C:\laragon\www\examPHP\examphp\inc\db.php');
if(isset($_POST ['submit']))
{
    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirm-password']) && $_POST['password'] === $_POST['confirm-password'])
    {
        $email_user = $db-> quote($_POST['username']);
        $password_user = $db-> quote(password_hash($_POST['password'], PASSWORD_DEFAULT));
        $sql = $db -> prepare("INSERT INTO utilisateurs SET
        email = $email_user,
        password = $password_user");
        if($sql-> execute())
        {
            echo "envoye";
        }else
        {
            echo "veuillez reessayer";
        }    
    }else
    {
        echo "Veuillez entrer des mots de passes identiques";
    }
}
?>