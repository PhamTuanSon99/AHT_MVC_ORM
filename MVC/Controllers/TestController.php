<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\TestRepository;
use MVC\Models\TestModel;

class TestController extends Controller {
    protected $testRepo;

    public function __construct() {
        $this->testRepo = new TestRepository();
    }

    public function index() {
        $d['test'] = $this->testRepo->getAll();
        $this->set($d);

        $this->render('index');
    }

    public function create() {
        $tm = new TestModel();

        if(isset($_POST['test_name'])) {
            $tm->setName($_POST['test_name']);

            if($this->testRepo->add($tm)) {
                header("Location: " . WEBROOT . "test/index");
            }
        }

        $this->render('create');
    }

    public function edit($id) {
        $tm = new TestModel();

        $d['test'] = $this->testRepo->get($id);
        if(isset($_POST['test_name'])) {
            $tm->setId($id);
            $tm->setName($_POST['test_name']);

            if($this->testRepo->edit($tm)) {
                header("Location: " . WEBROOT . "test/index");
            }
        }

        $this->set($d);
        $this->render('edit');
    }

    public function delete($id) {
        if($this->testRepo->delete($id)) {
            header("Location: " . WEBROOT . "test/index");
        }
        
    }
}