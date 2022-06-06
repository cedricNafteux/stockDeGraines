<?php
namespace Src\Models;

use Src\DataBase\Dao;

class SemenceModel {

    public function listSemence()
    {
        $dao = new Dao();
        $listSemence = $dao->selectAllSemence();
        return $listSemence;
    }

}