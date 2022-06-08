<?php
namespace Src\Entites;

class Photo {

/* ---------- PROPRIETES ---------- */
    private ?int $id_photo; //?int permet d'être null
    private string $titre_photo;
    private string $nom_photo;


/* ---------- CONSTRUCTEUR ---------- */
    public function __construct(string $titrePhoto='',string $nomPhoto=''){
        $this->id_photo = null;
        $this->titre_photo = $titrePhoto;
        $this->nom_photo = $nomPhoto;
    }

/* ---------- GETTERS ---------- */
    public function getIdPhoto(){return $this->id_photo;}
    public function getTitrePhoto(){return $this->titre_photo;}
    public function getNomPhoto(){return $this->nom_photo;}

}