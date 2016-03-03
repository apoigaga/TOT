<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TrainerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'trainer_id') ?>

    <?= $form->field($model, 'trainer_name') ?>

    <?= $form->field($model, 'trainer_ic') ?>

    <?= $form->field($model, 'trainer_studentID') ?>

    <?= $form->field($model, 'trainer_address') ?>

    <?php // echo $form->field($model, 'trainer_email') ?>

    <?php // echo $form->field($model, 'question_id') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'training_id') ?>

    <?php // echo $form->field($model, 'trainerAnswer_id') ?>

    <?php // echo $form->field($model, 'mark_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
