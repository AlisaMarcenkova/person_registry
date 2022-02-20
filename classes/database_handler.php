<?php

class DatabaseHandler{

    protected function connect(){
        try {
            $username = "root";
            $password = "";
            $databaseHandler = new PDO('mysql:host=localhost;dbname=person_registry', $username, $password);
            return $databaseHandler;
        }
        catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}