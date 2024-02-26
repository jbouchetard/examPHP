<?php
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if(isset($_GET['route']))
        $action = $_GET['route'];
    else{
        $action=null;
    }
    switch($action){
        case 'register':
            require('controllers/register.php');
        break;
        case 'login':
            require('controllers/login.php');
        break;
        case 'upload':
            require('controllers/upload.php');
        break;
        
        case 'logout':
            require('controllers/logout.php');
        break;

        default:
            require('controllers/index.php');
        break;
    }
}
?>