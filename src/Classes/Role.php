<?php

namespace App\Classes;

class Role {
    public $id;
    private $nom;
    public $created_at;
    public $updated_at;
    
    
    public function __construct($id, $nom, $created_at='', $updated_at='') {
            $this->id = $id;
            $this->nom = $nom;
            $this->created_at = $created_at;
            $this->updated_at = $updated_at;
    }

    public function getTitle(){
        return $this->nom;
    }
    
}