<?php

namespace App\Contenu;

class Chocolat{
    private $id;
    private $titre;
    private $description;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id= $id;
        return $this;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function setTitre($titre){
        $this->titre= $titre;
        return $this;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description=$description;
        return $this;
    }
}