<?php

namespace MVC\Models;

use MVC\Models\TaskResourceModel;

class TaskRepository
{
    public $taksRepo;

    public function __construct()
    {
        return $this->taksRepo = new TaskResourceModel();
    }

    public function add($model)
    {
        return $this->taksRepo->save($model);
    }
    
    public function edit($model)
    {
        return $this->taksRepo->save($model);
    }

    public function delete($model)
    {
        return $this->taksRepo->delete($model);
    }

    public function getAll()
    {
        return $this->taksRepo->getList();
    }

    public function get($id)
    {
        return $this->taksRepo->getModelById($id);
    }
}

new TaskRepository();