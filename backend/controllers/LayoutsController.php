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

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

}
