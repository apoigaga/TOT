<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ExamTime */

$this->title = 'Create Exam Time';
$this->params['breadcrumbs'][] = ['label' => 'Exam Times', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-time-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
