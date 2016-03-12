<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TrainerAnswer */

$this->title = 'Update Trainer Answer: ' . ' ' . $model->trainerAnswer_id;
$this->params['breadcrumbs'][] = ['label' => 'Trainer Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->trainerAnswer_id, 'url' => ['view', 'id' => $model->trainerAnswer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trainer-answer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
