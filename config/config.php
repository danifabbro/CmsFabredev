<?php 
    define('DEV', true); // in sviluppo o online?
    define("DOC_ROOT", 'C:\xampp\htdocs\Cms Fabredev\public'); // percorso doc root del sito NB: in questo caso gli slash sono verso sinistra perchè in locale
    define("ROOT_FOLDER", 'public'); //nome della cartella root

    //impostazione database

    $type = 'mysql';
    $server = 'localhost';
    $db = 'cmsfabredev';
    $port = '3306';
    $charset = 'utf8mb4';
    $username = 'cms_fabredev';
    $password = '8W@ITg!Qe[VtOK(p';
    $dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";

    //impostazione per gli upload dei file
?>
<!DOCTYPE html>
<head>
</head>
<body>
    <?php
        if($dsn == true){
        echo "la connessione è corretta";
    }
    ?>
</body>