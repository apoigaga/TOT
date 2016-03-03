<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WrongAnswer */

$this->title = 'Create Wrong Answer';
$this->params['breadcrumbs'][] = ['label' => 'Wrong Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrong-answer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
