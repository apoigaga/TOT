<?php

namespace backend\controllers;

class LayoutsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');

    }

     public function actionAdmin()
    {
        return $this->render('admin');
    }

}
