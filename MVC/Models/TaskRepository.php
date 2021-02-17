<?php

namespace MVC\Models;

use MVC\Models\TaskResourceModel;

class TaskRepository
{
    public $taksReMo;

    public function __construct()
    {
        return $this->taksReMo = new TaskResourceModel();
    }

    public function add($model)
    {
        return $this->taksReMo->save($model);
    }
    
    public function edit($model)
    {
        return $this->taksReMo->save($model);
    }

    public function delete($id)
    {
        return $this->taksReMo->delete($id);
    }

    public function getAll()
    {
        return $this->taksReMo->getList();
    }

    public function get($id)
    {
        return $this->taksReMo->getModelById($id);
    }
}