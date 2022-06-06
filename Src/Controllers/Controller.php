<?php
namespace Src\Controllers;

abstract class Controller {

    public function execute($action) {
        $this->$action();
    }

    public function render($view, $param = []) {
        extract($param);
        //$connected = $_SESSION['connected'];
        include 'Src/Views/Template.php';
    }

    // public function renderHtml($view, $param = []) {
    //     extract($param);
    //     $connected = $_SESSION['connected'];
    //     ob_start();
    //     include 'App/Views/template.php';
    //     $page = ob_get_flush();
    //     return $page;
    // }

}