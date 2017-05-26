<?php

namespace App\DAO;

use Doctrine\DBAL\Connection;
use App\Contenu\Comment;

class CommentDAO extends DAO
{

    private $chocolatDAO;

    public function setChocolatDAO(ChocolatDAO $chocolatDAO)
    {
        $this->chocolatDAO= $chocolatDAO;
    }

    public function findAllByChocolat($chocolatId)
    {
        $chocolat= $this->chocolatDAO->find($chocolatId);
        $statement= "SELECT id, auteur, commentaire, choco_id FROM commentaires WHERE choco_id=?";
        $result= $this->getDb()->fetchAll($statement, array($chocolatId));

        $chocolats= array();

        foreach($result as $row){
            $comId= $row['id'];
            $comment= $this->buildDomainObject($row);
            $comment->setChocolat($chocolat);
            $comments[$comId]= $comment;
        }

        return $comments;


    }

    protected function buildDomainObject(array $row) {
        $comment= new Comment();
        $comment->setId($row['id']);
        $comment->setContenu($row['commentaire']);
        $comment->setAuteur($row['auteur']);

        if(array_key_exists('id', $row)){
            $chocolatId= $row['id'];
            $chocolat=$this->chocolatDAO->find($chocolatId);
            $comment->setChocolat($chocolat);
        }

        return $comment;
    }
}
