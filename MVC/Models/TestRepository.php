<?php

namespace MVC\Models;

use MVC\Models\TestResourceModel;

class TestRepository extends TestResourceModel {
    public $testReMo;

    public function __construct()
    {
        return $this->testReMo = new TestResourceModel();
    }

    public function add($model)
    {
        return $this->testReMo->save($model);
    }
    
    public function edit($model)
    {
        return $this->testReMo->save($model);
    }

    public function delete($id)
    {
        return $this->testReMo->delete($id);
    }

    public function getAll()
    {
        return $this->testReMo->getList();
    }

    public function get($id)
    {
        return $this->testReMo->getModelById($id);
    }
}