<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Gender */

$this->title = 'Update Gender: ' . ' ' . $model->gender_ID;
$this->params['breadcrumbs'][] = ['label' => 'Genders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gender_ID, 'url' => ['view', 'id' => $model->gender_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gender-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
