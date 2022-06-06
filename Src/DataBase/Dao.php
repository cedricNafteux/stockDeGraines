<?php

namespace Src\DataBase;

use PDO;


class Dao
{

    private PDO $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new PDO('mysql:host=localhost;dbname=stockdegraines;charset=utf8', 'root', '');
    }

    public function selectAllSemence()
    {
        $sql = 'SELECT * FROM semences' ;
        $semenceStat = $this->dbConnect->prepare($sql);
        $semenceStat->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Src\Entites\Semence');
        $semenceStat->execute();
        $semences = $semenceStat->fetchAll();
        return $semences;
    }


}
