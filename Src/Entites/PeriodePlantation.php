<?php
namespace Src\Entites;

class PeriodePlantation {

/* ---------- PROPRIETES ---------- */
    private ?int $id_plantation;
    private string $debut_plantation;
    private string $fin_plantation;

/* ---------- CONSTRUCTEUR ---------- */
    public function __construct(string $debutPlantation='',string $finPlantation=''){
        $this->id_plantation = null;
        $this->debut_plantation = $debutPlantation;
        $this->fin_plantation = $finPlantation;
    }

/* ---------- GETTERS ---------- */
    public function getIdPlantation(){return $this->id_plantation;}
    public function getDebutPlantation(){return $this->debut_plantation;}
    public function getFinPlantation(){return $this->fin_plantation;}
}