<?php
namespace Src\Entites;

class Semence {

/* ---------- PROPRIETES ---------- */
    private ?int $id_semence;
    private string $nom_semence;
    private string $conseil;
    private int $quantite;

/* ---------- CONSTRUCTEUR ---------- */
    public function __construct(string $nomSemence='',string $conseilSemence='', int $quantiteSemence=0){
        $this->id_semence = null;
        $this->nom_semence = $nomSemence;
        $this->conseil = $conseilSemence;
        $this->quantite = $quantiteSemence;
    }

/* ---------- GETTERS ---------- */
    public function getIdSemence(){return $this->id_semence;}
    public function getNomSemence(){return $this->nom_semence;}
    public function getConseilSemence(){return $this->conseil;}
    public function getQuantiteSemence(){return $this->quantite;}

}