<?php

class AddUser extends AddingPersons{
    private $name;
    private $surname;
    private $personal_code;

    public function __construct($name, $surname, $personal_code)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->personal_code = $personal_code;
    }

    public function addingUser(){
        if($this->emptyInput() == false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        $this->setUser($this->name, $this->surname, $this->personal_code);
    }
    private function emptyInput(){
        if(empty($this->name) || empty($this->surname) || empty($this->personal_code)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}