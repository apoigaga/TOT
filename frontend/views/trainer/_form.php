<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Trainer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainer-form">

    <?php $form = ActiveForm::begin(['options'=>['style'=>'width:600px;margin:0px auto;']]); ?>

    <?= $form->field($model, 'trainer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_icNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_phoneNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_race')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_maritialStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_highestQualification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_dateOfTraining')->textInput() -> label('Date Of Training') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Register' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
