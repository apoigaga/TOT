<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CorrectAnswer */

$this->title = $model->correctAnswer_id;
$this->params['breadcrumbs'][] = ['label' => 'Correct Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="correct-answer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->correctAnswer_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->correctAnswer_id], [
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
            'correctAnswer_id',
            'correctAnswer_answer',
            'question_id',
        ],
    ]) ?>

</div>
