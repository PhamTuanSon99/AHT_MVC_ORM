<?php 

namespace MVC\Models;

use MVC\Core\Model;

class TestModel extends Model {
    protected $id;
    protected $name;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}