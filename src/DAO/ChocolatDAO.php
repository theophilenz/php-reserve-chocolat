<?php

namespace App\DAO;
use Doctrine\DBAL\Connection;
use App\Contenu\Chocolat;

class ChocolatDAO{
    private $db;

    public function __construct(Connection $db){
        $this->db=$db;
    }

    public function findAll(){
        $statement= 'SELECT * FROM chocolats';
        $result= $this->db->fetchAll($statement);

        //Convertir les résultats dans une chaine d'objets
        $chocolats= array();
        foreach ($result as $row){
            $chocolatId= $row['id'];
            $chocolats[$chocolatId]= $this->buildContenu($row);
        }
        return $chocolats;
    }

    private function buildContenu(array $row){
        $contenu= new Chocolat();

        $contenu->setId($row['id']);
        $contenu->setTitre($row['titre']);
        $contenu->setDescription($row['description']);
        return $contenu;
    }
}