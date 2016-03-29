<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Trainer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainer-form">

    <br>

    <?php $form = ActiveForm::begin(['options'=>['style'=>'width:600px;margin:0px auto;']]); ?>

    <?php echo $form->field($model, 'trainer_name', [
                            'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']
                            ])->textInput()->input('trainer_name', ['placeholder' => "Name"])->label(false); ?>

  
    <?php echo $form->field($model, 'trainer_icNO', [
                            'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']
                            ])->textInput()->input('trainer_icNO', ['placeholder' => "IC Number"])->label(false); ?>

    <?php echo $form->field($model, 'trainer_address', [
                            'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']
                            ])->textInput()->input('trainer_address', ['placeholder' => "Address"])->label(false); ?>
                                                     
    <?php echo $form->field($model, 'trainer_phoneNO', [
                            'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']
                            ])->textInput()->input('trainer_phoneNO', ['placeholder' => "Phone Number"])->label(false); ?>

   <?php echo $form->field($model, 'trainer_email', [
                            'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']
                            ])->textInput()->input('trainer_email', ['placeholder' => "Email"])->label(false); ?>

    <?= $form->field($model, 'trainer_race')->dropDownlist(
            [ 'Malay'=>'Malay',
              'Chinese'=>'Chinese',
              'Indian'=>'Indian',
              'Others'=>'Others'],
              ['prompt'=>'--Race--'])->label(false); 
    ?>

    <?= $form->field($model, 'trainer_maritialStatus')->dropDownlist(
            [ 'Single'=>'Single',
              'Married'=>'Married'],
              ['prompt'=>'--Maritial Status--'])->label(false);
    ?>

    <?php echo $form->field($model, 'trainer_occupation', [
                            'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']
                            ])->textInput()->input('trainer_occupation', ['placeholder' => "Current Occupation"])->label(false); 
    ?>

    <?= $form->field($model, 'trainer_highestQualification')->radioList(
            [ '1' => 'Diploma',
              '2' => 'Degree',
              '3' => 'Master',
              '4' => 'Phd']);
    ?>

    <?= $form->field($model, 'trainer_dateOfTraining')->widget(DatePicker::className(), [
        'options' => ['placeholder' => 'Pick training date ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'dd-mm-yyyy',
        ],
    ])->label(false);?>

    <div class="form-group" align="center">
        <?= Html::submitButton($model->isNewRecord ? 'Register' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
