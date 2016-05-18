<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
</head>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\password\PasswordInput;

$this->title = 'Change Password';

?>

<div class="user-change_password">
 
    <h4>
    <div class="panel-group">
	    <div class="panel panel-warning">
	       	<div class="panel-heading" align="center">Kindly Change Password</div>
	    </div>
	   </div>
	</h4>

	<div class="form-body"><br><br>

		<?php $form = ActiveForm::begin([
			'id' => 'change-password',
			'fieldConfig' => [
				'template' => "{label}{input}{error}",
			],
		]); ?>

		<div class="row">

			<div class="col-md-5 col-md-offset-4">

								<?= $form->field($user, 'currentPassword')->widget(PasswordInput::classname(), [
										'pluginOptions' => [
									    'showMeter' => false
	    								]

									]);
								?>

			</div>

			<div class="col-md-5 col-md-offset-4">

								<?= $form->field($user, 'newPassword')->widget(PasswordInput::classname(), [
										'pluginOptions' => [
									    'showMeter' => true,
									    'togglePlacement' => 'left'
	    								]

									]);
								?>
			</div>

			<div class="col-md-5 col-md-offset-4">
								<?= $form->field($user, 'newPasswordConfirm')->widget(PasswordInput::classname(), [
										'pluginOptions' => [
									    'showMeter' => true,
									    'togglePlacement' => 'left'
	    								]

									]);
								?>
			</div>
			
		</div>

		<br>
		<div class="form-actions">
							<div class="row">
								<div class="col-md-8" align="center">
									<div class="row">
										<div class="col-md-offset-3 col-md-12">
											<?= Html::submitButton($user->isNewRecord ? Yii::t('app', '<i class="fa fa-plus"></i> Create',['/site/index']) : Yii::t('app', '<i class="fa fa-check"></i> Submit'), ['class' =>'btn btn-primary']) ?>&nbsp;&nbsp;

											<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>

											<?= Html::a('<i class="fa  fa-times"></i> Cancel', ['/site/index'], ['class' => 'btn btn-circle default']) ?>
										</div>
									</div>
								</div>
									<div class="col-md-6">
									</div>
							</div>
		</div>

		<?php ActiveForm::end(); ?>

	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</div>