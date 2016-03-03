<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WrongAnswer */

$this->title = $model->wrongAnswer_id;
$this->params['breadcrumbs'][] = ['label' => 'Wrong Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrong-answer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->wrongAnswer_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->wrongAnswer_id], [
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
            'wrongAnswer_id',
            'wrongAnswer_wrong',
            'question_id',
        ],
    ]) ?>

</div>
