<?php

namespace MVC\Models;

use MVC\Core\ResourceModel;
use MVC\Models\TestModel;

class TestResourceModel extends ResourceModel {
    public function __construct() {
        parent::_init("test", "id", new TestModel());
    }
}