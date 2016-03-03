<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CorrectAnswer */

$this->title = 'Update Correct Answer: ' . ' ' . $model->correctAnswer_id;
$this->params['breadcrumbs'][] = ['label' => 'Correct Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->correctAnswer_id, 'url' => ['view', 'id' => $model->correctAnswer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="correct-answer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
