<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WrongAnswer */

$this->title = 'Update Wrong Answer: ' . ' ' . $model->wrongAnswer_id;
$this->params['breadcrumbs'][] = ['label' => 'Wrong Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->wrongAnswer_id, 'url' => ['view', 'id' => $model->wrongAnswer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wrong-answer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
