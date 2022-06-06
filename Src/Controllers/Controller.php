<?php
namespace Src\Controllers;

abstract class Controller {

    public function execute($action) {
        $this->$action();
    }

    public function render($view, $param = []) {
        extract($param);
        include 'Src/Views/Template.php';
    }


}