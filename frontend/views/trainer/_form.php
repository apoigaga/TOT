<?php

use yii\helpers\Html;
use kartik\date\DatePicker;
use kartik\widgets\ActiveForm;
use kartik\form\ActiveField;
use yii\helpers\ArrayHelper;
use frontend\models\Gender;

/* @var $this yii\web\View */
/* @var $model frontend\models\Trainer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainer-form">

    <br>

    <?php $form = ActiveForm::begin(['options'=>['style'=>'width:600px;margin:0px auto;']]); ?>


    <?php echo $form->field($model, 'trainer_name', [
                            'feedbackIcon' => [
                            'default' => 'user',
                            'success' => 'user-plus',
                            'error' => 'exclamation-sign',
                            'defaultOptions' => ['class'=>'text-warning']]
                            ])->textInput()->input('trainer_name', ['placeholder' => "Name"])->label(false); ?>


    <?php echo $form->field($model, 'trainer_icNO', [
                            'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent']
                            ])->textInput()->input('trainer_icNO', ['placeholder' => "IC Number"])->label(false); ?>

    <?php echo $form->field($model, 'gender_ID')->dropDownList(ArrayHelper::map(backend\models\Gender::find()->all(),'gender_ID','gender_type'),
            ['prompt'=>'---Select Gender---'])->label(false); ?>


    <?php echo $form->field($model, 'trainer_address', [
                            'hintType' => ActiveField::HINT_SPECIAL,
                            'hintSettings' => ['placement' => 'right', 'onLabelClick' => true, 'onLabelHover' => false]
                            ])->textArea([
                                'id' => 'address-input', 
                                'placeholder' => 'Enter address...', 
                                'rows' => 4
                            ])->hint('Enter address in 4 lines. First 2 lines must contain the street details and next 2 lines the city, zip, and country detail.')->label(false); ?> 


    <?php echo $form->field($model, 'trainer_phoneNO', [
                            'feedbackIcon' => [
                            'default' => 'phone',
                            'success' => 'ok',
                            'error' => 'exclamation-sign']
                            ])->textInput()->input('trainer_phoneNO', ['placeholder' => 'Enter phone number...'])->label(false); ?>


    <?php echo $form->field($model, 'trainer_email', [
                            'feedbackIcon' => [
                            'default' => 'envelope',
                            'success' => 'ok',
                            'error' => 'exclamation-sign',
                            'defaultOptions' => ['class'=>'text-primary']]
                            ])->textInput()->input('trainer_email',['placeholder'=>'Enter a valid email address...'])->label(false); ?>


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
                        'hintType' => ActiveField::HINT_SPECIAL,
                        'hintSettings' => [
                            'iconBesideInput' => true,
                            'onLabelClick' => false,
                            'onLabelHover' => false,
                            'onIconClick' => true,
                            'onIconHover' => true,
                            'title' => '<i class="glyphicon glyphicon-info-sign"></i> Note'
                        ]
        ])->textInput()->input('trainer_occupation', ['placeholder' => "Current occupation"])->hint('Enter your <b>current occupation</b> to complete this form.')->label(false); 
    ?>


    <?= $form->field($model, 'trainer_highestQualification',['labelOptions'=>['class'=>'control-label col-sm-offset-0 col-sm-5', 'style'=>'padding:40px;']])->radioList(
                            [ 'SPM' => 'SPM/STPM',
                              'Diploma' => 'Diploma',
                              'Degree' => 'Degree',
                              'Master' => 'Master',
                              'Phd' => 'Phd']);
                        ?>


    <?= $form->field($model, 'trainer_dateOfTraining')->widget(DatePicker::className(), [
        'options' => ['placeholder' => 'Pick training date ...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd',
        ],
    ])->label(false);?> 


    <div class="form-group" align="center">
        <?= Html::submitButton($model->isNewRecord ? 'Register' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
