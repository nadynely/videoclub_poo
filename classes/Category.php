<?php

// Category.php

class Category {

    protected $id;
    protected $title;
    protected $description;

    //Fonctions magiques

    public function __construct($title, $description) {
            $this->setTitle($title);
            $this->setDescription($description);
    }

    //getters

    public function id() {
        return $this->id;
    }

    public function title() {
        return $this->title;
    }

    public function description() {
        return $this->description;
    }

    //setters

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    // Methode

    public function save() {
        
    }
}