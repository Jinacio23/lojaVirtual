<?php

class Database{
    private $database = 'bdaula';
    private $host = 'localhost';
    private $user = "root";
    private $password = "";


    public function getConnection(){

        //Mysqli
        $mysqli = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $mysqli;

    }

}