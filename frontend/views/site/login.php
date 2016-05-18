<!DOCTYPE html>
<html >
  <head>

        <!-- <link rel="stylesheet" href="css/reset.css"> -->
        <link rel="stylesheet" href="css/style.css">
        
  </head>

<body>

<link href="http://fonts.googleapis.com/css?family=Oxygen:400,300,700" rel="stylesheet" type="text/css"/>

<link href="http://code.ionicframework.com/ionicons/1.4.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>

<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="signin cf">
        <center>
            <h2><b> Training of Trainer </b></h2>
        </center>
        <br>
    <div class="avatar"></div>
 
        <div class="inputrow">

                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                        <?php echo $form->field($model, 'ic_number', [
                            'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']
                            ])->textInput()->input('ic_number', ['placeholder' => "IC Number"])->label(false); ?>

                        <?php echo $form->field($model, 'password', [
                            'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']
                            ])->textInput()->input('password', ['placeholder' => "Password"])->label(false); ?>

                    
                        <div style="color:#999;margin:1em 0">
                            If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                        </div>

                        <div class="form-group">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>
               
        </div>

    </div>
    </div>

</div>


    <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
    <!-- <script src="js/index.js"></script> -->

</body>
</html>
