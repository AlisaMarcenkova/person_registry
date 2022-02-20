<?php

class AddingPersons extends DatabaseHandler {

    protected function setUser($name, $surname, $personal_code){
        $stmt = $this->connect()->prepare('INSERT INTO persons (name, surname, personal_code) VALUES (?, ?, ?);');

        if(!$stmt->execute(array($name, $surname, $personal_code))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($name, $surname, $personal_code){
        $stmt = $this->connect()->prepare('SELECT (name, surname, personal_code) FROM persons WHERE name = ? AND surnam = ? AND personal_code =?;');

        if(!$stmt->execute(array($name, $surname, $personal_code))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }
}