<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Gender */

$this->title = 'Update Gender: ' . ' ' . $model->gender_id;
$this->params['breadcrumbs'][] = ['label' => 'Genders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gender_id, 'url' => ['view', 'id' => $model->gender_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gender-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
