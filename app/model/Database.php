<?php

class Database
{
    private $database = 'bdaula';
    private $host = 'mysql';
    private $user = "root";
    private $password = "root";


    public function getConnection()
    {

        //Mysqli
        $mysqli = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $mysqli;
    }
}
