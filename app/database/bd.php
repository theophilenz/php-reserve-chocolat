<?php

namespace App\database;

class Database{

    private $dbhost;
    private $dbname;
    private $dbuser;
    private $dbpass;
    private $dsn;
    private $connection;

    public function __construct($dbname, $dbhost, $dbuser, $dbpass){
        $this->dbhost=$dbhost;
        $this->dbname=$dbname;
        $this->dbpass=$dbpass;
        $this->dbuser=$dbuser;
    }

    private function seConnecter(){
        $dsn='mysql:host='.$this->dbhost.';dbname=,'.$this->dbname;
        try{
            $connexion= new PDO($dsn, $this->dbuser, $this->dbpass);
            $connexion->setAttribute(PDO::ERR_MODE, PDO::ERRMODE_EXCEPTION);
            $this->connection= $connection;
        }catch(Exception $ex){
            die("Erreur de connexion".$ex->getMessage());
        }
        return $this->connection;
    }
}