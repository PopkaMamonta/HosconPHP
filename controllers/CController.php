<?php

require_once('./models/CModel.php');
require_once('./views/CView.php');

class CController{
    public $model;
    public $view;

    public function setMainPage(){
        $model=new CModel();
        $resultModel=$model->getData();
        return $resultModel;
    }
}