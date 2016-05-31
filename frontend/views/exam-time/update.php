<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ExamTime */

$this->title = 'Update Exam Time: ' . $model->examTime_id;
$this->params['breadcrumbs'][] = ['label' => 'Exam Times', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->examTime_id, 'url' => ['view', 'id' => $model->examTime_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exam-time-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
