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

    // CRUD -> pokemons

function listAllPokemons($conx) {
    try {
        $sql = "SELECT p.*, t.name AS nametrainer
                FROM pokemons AS p, trainers AS t
                WHERE p.trainer_id = t.id";
        $stm = $conx->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    } catch (PDOException $e) {
        echo $e->getMEssage();        
    }
}

// Show pokemon
function showPokemon($conx, $id) {
    try {
        $sql = "SELECT p.*, t.name AS nametrainer 
        FROM pokemons AS p, trainer AS t
        WHERE p.id = :id AND p.trainer_id = t.id";
        $stm = $conx->prepare($sql);
        $stm = bindparam(":id", $id);
        $stm->execute();
        return $stm->fetchAll();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }    
}

// TRainers

// List All Trainers

function listAllTrainers($conx) {
    try {
        $sql = "SELECT * FROM trainers";
        $stm = $conx->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }    
}

