<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CorrectAnswer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="correct-answer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'correctAnswer_answer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'question_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
