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

    <?= $form->field($model, 'trainer_icNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_phoneNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_race')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_maritialStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_highestQualification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trainer_dateOfTraining')->textInput() ?>

    <?= $form->field($model, 'gender_ID')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
