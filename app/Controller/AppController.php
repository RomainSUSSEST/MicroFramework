<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class AppController extends Controller{

    protected  $template = 'default';

    /**
     * AppController constructor.
     */
    public function __construct(){
        $this->viewPath = ROOT . '/app/Views/';
    }

    /**
     * @param $model_name : Table à afficher
     */
    protected function loadModel($model_name){
        $this->$model_name = App::getInstance()->getTable($model_name);
    }

}