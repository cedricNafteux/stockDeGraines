<?php
namespace Src\Entites;

class Semence {

/* ---------- PROPRIETES ---------- */
    private ?int $id_semence; //?int permet d'être null
    private string $nom_semence;

/* ---------- CONSTRUCTEUR ---------- */
    public function __construct(string $nom=''){
        $this->id_semence = null;
        $this->nom_semence = $nom;
    }

/* ---------- GETTERS ---------- */
    public function getIdSemence(){return $this->id_semence;}
    public function getNomSemence(){return $this->nom_semence;}

}