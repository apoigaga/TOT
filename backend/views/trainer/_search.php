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

    <?= $form->field($model, 'trainer_icNO') ?>

    <?= $form->field($model, 'trainer_address') ?>

    <?= $form->field($model, 'trainer_phoneNO') ?>

    <?php // echo $form->field($model, 'trainer_email') ?>

    <?php // echo $form->field($model, 'trainer_race') ?>

    <?php // echo $form->field($model, 'trainer_maritialStatus') ?>

    <?php // echo $form->field($model, 'trainer_highestQualification') ?>

    <?php // echo $form->field($model, 'trainer_occupation') ?>

    <?php // echo $form->field($model, 'trainer_dateOfTraining') ?>

    <?php // echo $form->field($model, 'gender_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
