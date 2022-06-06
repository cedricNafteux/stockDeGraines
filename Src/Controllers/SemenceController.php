<?php
namespace Src\Controllers;

use Src\Models\SemenceModel;

class SemenceController extends Controller {


    public function list() {
        $model = new SemenceModel();
        $lSemences = $model->listSemence();
        $param = ['semences' => $lSemences];
        $this->render('Semence/ListSemence', $param);

    }

    public function ajout() {
        $this->render('Semence/formAjout');
    }

    public function nouvelle() {
        $model = new SemenceModel();
        $model->nouvelleSemence();
        $this->render('Semence/formAjout');
    }

    public function supprimer() {

        $idSemence = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $model = new SemenceModel();
        $model->supprimerSemence($idSemence);

        $lSemences = $model->listSemence();
        $param = ['semences' => $lSemences];
        $this->render('Semence/ListSemence', $param);
    }

}