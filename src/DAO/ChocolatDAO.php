<?php

namespace App\DAO;

use App\Contenu\Chocolat;

class ChocolatDAO extends DAO
{
   
    public function findAll()
    {
        $stmt= "SELECT * FROM chocolats";
        $result= $this->getDb()->fetchAll($stmt);

        //Convertir les résultats dans une chaine d'objets
        $chocolats= array();
        foreach ($result as $row) {
            $chocolatId= $row['id'];
            $chocolats[$chocolatId]= $this->buildDomainObject($row);
        }
        return $chocolats;
    }

    protected function buildDomainObject(array $row)
    {
        $contenu= new Chocolat();

        $contenu->setId($row['id']);
        $contenu->setTitre($row['titre']);
        $contenu->setDescription($row['description']);
        return $contenu;
    }

    public function find($id)
    {
        $statement= 'SELECT * FROM chocolats WHERE id=?';
        $row= $this->getDb()->fetchAssoc($statement, array($id));

        if ($row) {
            return $this->buildDomainObject($row);
        } else {
            throw new \Exception("Aucun chocolat qui match le id de ce chocolat".$id);
        }
    }
}
