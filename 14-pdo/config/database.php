<?php
    try {
        $conx = new PDO("mysql:host=$host;dbname=$name_db", $user, $passwd);
        $conx->exec("set names utf8");
        // #this->conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection Successfully";
    }
    catch(PDOException $e) {
        echo "Error e la conexión " . $e->getMessage();
    }
