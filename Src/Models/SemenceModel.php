<?php
namespace Src\Models;

use Src\DataBase\Dao;
use Src\Entites\Semence;

class SemenceModel {

    public function listSemence()
    {
        $dao = new Dao();
        $listSemence = $dao->selectAllSemence();
        return $listSemence;
    }

    public function nouvelleSemence()
    {
        $semenceName = filter_input(INPUT_POST, 'nomSem', FILTER_SANITIZE_SPECIAL_CHARS);
        $semence = new Semence($semenceName);
        $dao = new Dao();
        $dao->insertSemence($semence);
    }

    public function supprimerSemence($id)
    {
        $dao = new Dao();
        $dao->deleteSemence($id);
    }

}