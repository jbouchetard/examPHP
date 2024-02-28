<?php
require('inc/db.php');

if(isset($_POST['submit']))
{
    if(!empty($_FILES['files']))
    {
        if(is_uploaded_file($_FILES['files']['tmp_name']))
        {
            $idUsers = '1';
            $id = '1';
            $new_name = time().$_FILES['files']['name'];
            var_dump($new_name);
            $fileBack = $db-> quote($new_name);
            $idBack = $db-> quote($id);
            $idBackUser = $db -> quote($idUsers);
            $sql = $db -> prepare("INSERT INTO fichiers SET
            id = $idBack,
            id_utilisateur = $idBackUser,
            fichier = $fileBack
            ");
            
            if ($sql -> execute())
            {
                echo "Fichier envoyé";
            }else
            {
                echo "marche pas";
            }
        } 
    }  
}
?>