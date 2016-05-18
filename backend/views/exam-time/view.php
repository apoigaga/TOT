<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ExamTime */

$this->title = $model->examTime_id;
$this->params['breadcrumbs'][] = ['label' => 'Exam Times', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-time-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->examTime_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->examTime_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'examTime_id:datetime',
            'exam_start',
            'exam_end',
        ],
    ]) ?>

</div>
