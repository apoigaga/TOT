<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\models;


$this->title = 'Change Password';
?>

<div class="form-body"><br>


	<p align="center">Please fill out the following fields to change password :</p>

	<?php $form = ActiveForm::begin([
		'id' => 'change-password',
		'fieldConfig' => [
			'template' => "{label}{input}{error}",
		],
	]); ?>

	<div class="row">
		<div class="col-md-5 col-md-offset-4">
			<?= $form->field($model, 'current_pass') ->passwordInput() ?>
						
			<?= $form->field($model, 'new_pass') ->passwordInput() ?>

			<?= $form->field($model, 'retype_pass') ->passwordInput() ?>
				

				<div class="form-actions">
					<div class="row">
						<div class="col-md-8" align="center">
							<div class="row">
								<div class="col-md-offset-3 col-md-12">
									<?= Html::submitButton($model->isNewRecord ? Yii::t('app', '<i class="fa fa-plus"></i> Create') : Yii::t('app', '<i class="fa fa-check"></i> Change password'), ['class' =>'btn btn-circle blue']) ?>&nbsp;&nbsp;
									<?= Html::a('<i class="fa  fa-times"></i> Cancel', ['/site/index'], ['class' => 'btn btn-circle default']) ?>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							</div>
					</div>
				</div>
		</div>
	
	</div>

	<?php ActiveForm::end(); ?>

</div>
