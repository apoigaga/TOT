<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Mark */

$this->title = 'Update Mark: ' . ' ' . $model->mark_id;
$this->params['breadcrumbs'][] = ['label' => 'Marks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mark_id, 'url' => ['view', 'id' => $model->mark_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mark-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
