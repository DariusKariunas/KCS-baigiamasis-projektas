<?php

namespace KCSG\Database;

class Render
{
    private $Data;

    function render(){
        if (!empty($_POST["name"])) {
            $this->Data['name'] = $_POST["name"];
        }
        if (!empty($_POST["email"])) {
            $this->Data['email'] = $_POST["email"];
        }
        if (!empty($_POST["username"])) {
            $this->Data['username'] = $_POST["username"];
        }
        if (!empty($_POST["password"])) {
            $this->Data['password'] = $_POST["password"];
        }
        return $this->Data;
    }
}