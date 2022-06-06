<?php
namespace Src\Controllers;

use Src\Models\SemenceModel;

class SemenceController extends Controller {


    public function list() {
        $model = new SemenceModel();
        $semences = $model->listSemence();
        $param = ['semences' => $semences];
        $this->render('Semence/ListSemence', $param);

    }
    // public function list() {
    //     $model = new PhotoModel();
    //     $photos = $model->listPhoto();
    //     $param = ['photos' => $photos];
    //     $this->render('Photo/list', $param);
    // }
}