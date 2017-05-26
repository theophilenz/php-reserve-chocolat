<?php

namespace App\Contenu;

class Comment
{
    private $id;
    private $auteur;
    private $contenu;
    private $chocolat;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id=$id;
        return $this;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur=$auteur;
        return $this;
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu= $contenu;
        return $this;
    }

    public function getChocolat()
    {
        return $this->chocolat;
    }

    public function setChocolat(Chocolat $chocolat)
    {
        $this->chocolat= $chocolat;
        return $this;
    }
}
