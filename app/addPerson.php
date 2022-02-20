<?php

if(isset($_POST["submit"])){
    //Grabbing the Data
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $personal_code = $_POST["personal_code"];

    //Instantiate controller class

    include "../classes/database_handler.php";
    include "../classes/adding_persons.php";
    include "../classes/adding_persons_controller.php";

    $addingPerson = new AddUser($name, $surname, $personal_code);

    //Running error handlers

    $addingPerson->addingUser();

    //Going back to front page

    header("location: ../index.php?error=none");
}