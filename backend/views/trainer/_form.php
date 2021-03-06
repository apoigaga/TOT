<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Trainer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'trainer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_ic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_studentID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
