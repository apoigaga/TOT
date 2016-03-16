<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Answer */

$this->title = 'Update Answer: ' . ' ' . $model->answer_id;
$this->params['breadcrumbs'][] = ['label' => 'Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->answer_id, 'url' => ['view', 'id' => $model->answer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="answer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
