<?php
session_start();
define('ROOT', dirname(__DIR__));
require 'vendor/autoload.php';

use Src\Controllers\SemenceController;

$entity = filter_input(INPUT_GET, 'entity', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'list';

switch ($entity) {
    case 'semence':
        $ctrl = new SemenceController;
        break;

    default:
        $ctrl = new SemenceController;
        break;
}

$ctrl->execute($action);