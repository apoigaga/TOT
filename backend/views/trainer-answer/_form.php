<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TrainerAnswer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainer-answer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'trainerAnswer_answer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_id')->textInput() ?>

    <?= $form->field($model, 'question_id')->textInput() ?>

    <?= $form->field($model, 'mark_id')->textInput() ?>

    <?= $form->field($model, 'registered_question')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
