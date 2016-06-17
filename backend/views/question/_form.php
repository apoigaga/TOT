<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Question */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="question-form">

    <?php $form = ActiveForm::begin(); ?>

    

    <?= $form->field($model, 'question')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput() ?>

    <?= $form->field($model, 'section')->dropDownList(['A' => 'A', 'B' => 'B', 'C' => 'C'],['prompt' => '']) ?>

    <?= $form->field($model, 'level')->dropDownList(['easy' => 'Easy', 'moderate' => 'Moderate', 'difficult' => 'Difficult'],['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
