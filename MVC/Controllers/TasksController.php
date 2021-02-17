<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\TaskModel;
use MVC\Models\TaskRepository;


class TasksController extends Controller
{
    function index()
    {

        $tasks = new TaskRepository();

        $d['tasks'] = $tasks->getAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            $task = new TaskRepository();
            $tm = new TaskModel();
            $tm->setTitle($_POST["title"]);
            $tm->setDescription($_POST["description"]);
            $tm->setCreatedAt(date("Y-m-d H:i:s"));
            $tm->setUpdatedAt(date("Y-m-d H:i:s"));

            if ($task->add($tm))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $task= new TaskRepository();

        $d["task"] = $task->get($id);
        if (isset($_POST["title"]))
        {
            $tm = new TaskModel();
            $tm->setId($id);
            $tm->setTitle($_POST["title"]);
            $tm->setDescription($_POST["description"]);
            $tm->setCreatedAt($d["task"]["created_at"]);
            $tm->setUpdatedAt(date("Y-m-d H:i:s"));
            if ($task->edit($tm))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $task = new TaskRepository();
        if ($task->delete($id))
        {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}