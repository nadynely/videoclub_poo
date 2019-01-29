<?php

// Actor.php

class Actor {

    protected $id_actor;
    protected $firstname;
    protected $lastname;

    const TABLE_NAME = "Actor";

    public function __construct() {

    }

    public function id_actor() {
        return $this->id_actor;
    }

    public function firstname() {
        return $this->firstname;
    }

    public function lastname() {
        return $this->lastname;
    }

    public function setfirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    public function setlastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    public function save() {

        $this->dbCreate("Actor", [
            "firstname" => $this->firstname(),
            "lastname" => $this->lastname()
        ]);

    if ($this->id > 0) {
            $data["id_actor"] = $this->id();
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



