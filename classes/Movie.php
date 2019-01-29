<?php 

// Movie.php

class Movie extends Db {
 
    // Attributs
    protected $id;
    protected $title;
    protected $releaseDate;
    protected $plot;
    protected $id_category;


    // Constantes
    const TABLE_NAME = "Movie";


    // Méthodes magiques
    public function __construct(string $title, DateTime $releaseDate, string $plot, Category $category) {
        $this->setTitle($title);
        $this->setReleaseDate($releaseDate);
        $this->setPlot($plot);
        $this->setCategory($category);

   
    }


    // Getters

    public function id() {
        return $this->id;
    }

    public function title() {
        return $this->title;
    }

    public function releaseDate() {
        return $this->releaseDate;
    }

    public function plot() {
        return $this->plot;
    }

    public function id_category() {
        return $this->id_category;
    }
    
    public function category() {
        $category = Category::findOne($this->idCategory);
        return $category;
    }

    // Setters

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setReleaseDate(DateTime $releaseDate) {
        $this->releaseDate = $releaseDate->format('Y-m-d H:i:s');
        return $this;
    }

    public function setPlot($plot) {
        $this->plot = $plot;
        return $this;
    }

    public function setCategory(Category $category) {
        $this->idCategory = $category->id();
        return $this;
    }

    // Methodes


    public function save() {

        $data = [
            "title"         => $this->title(),
            "releaseDate"   => $this->releaseDate(),
            "plot"          => $this->plot(),
            "id_category"    => $this->id_category(),
        ];

        if ($this->id > 0) {
            $data["id_movie"] = $this->id();
            $this->dbUpdate(self::TABLE_NAME, $data);
            return $this;
        }

        $this->id = $this->dbCreate(self::TABLE_NAME, $data);

        return $this;
    }

    public function delete() {
        $data = [
            'id' => $this->id(),
        ];
        
        $this->dbDelete(self::TABLE_NAME, $data);
        return;
    }

}
