<?php
namespace Src\Entites;

class PeriodeRecolte {

/* ---------- PROPRIETES ---------- */
    private ?int $id_recolte;
    private string $debut_recolte;
    private string $fin_recolte;

/* ---------- CONSTRUCTEUR ---------- */
    public function __construct(string $debutRecolte='',string $finRecolte=''){
        $this->id_recolte = null;
        $this->debut_recolte = $debutRecolte;
        $this->fin_recolte = $finRecolte;
    }

/* ---------- GETTERS ---------- */
    public function getIdRecolte(){return $this->id_recolte;}
    public function getDebutRecolte(){return $this->debut_recolte;}
    public function getFinRecolte(){return $this->fin_recolte;}
}