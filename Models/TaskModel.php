<?php

namespace MVC\Models;

use MVC\Core\Model;

class TaskModel extends Model
{
    protected $id;
    protected $title;
    protected $description;
    protected $created_at;
    protected $updated_at;


    //ID
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    
    //Title
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title
    }
    
    //Description
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    //Created_at
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    //Updated_at
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}