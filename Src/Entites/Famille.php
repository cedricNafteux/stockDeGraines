<?php
namespace Src\Entites;

class Famille {

/* ---------- PROPRIETES ---------- */
    private ?int $id_famille;
    private string $nom_famille;

/* ---------- CONSTRUCTEUR ---------- */
    public function __construct(string $nomFamille=''){
        $this->id_famille = null;
        $this->nom_famille = $nomFamille;

    }

/* ---------- GETTERS ---------- */
    public function getIdFamille(){return $this->id_famille;}
    public function getNomFamille(){return $this->nom_famille;}
}