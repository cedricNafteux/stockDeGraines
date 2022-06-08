<?php

namespace Src\DataBase;

use PDO;


class Dao
{

    private PDO $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new PDO('mysql:host=localhost;dbname=stock_de_graines;charset=utf8', 'root', '');
    }

    public function selectAllSemence()
    {
        $sql = 'SELECT * FROM semence' ;
        $semenceStat = $this->dbConnect->prepare($sql);
        $semenceStat->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Src\Entites\Semence');
        $semenceStat->execute();
        $semences = $semenceStat->fetchAll();
        return $semences;
    }

    public function insertSemence($semence)
    {
        $sql = 'INSERT INTO semence VALUES (null, :nomSemence)' ;
        $semenceStat = $this->dbConnect->prepare($sql);
        $param = [
            ':nomSemence' => $semence->getNomSemence(),
        ];
        $semenceStat->execute($param);
    }

    public function deleteSemence($id)
    {
        $sql = 'DELETE FROM semence WHERE id_semence = '.$id ;
        $semenceStat = $this->dbConnect->prepare($sql);
        $semenceStat->execute();
    }
}
