<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Trainer */

$this->title = 'Trainer Registration';
// $this->params['breadcrumbs'][] = ['label' => 'Trainers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainer-create">

    <h1><center><?= Html::encode($this->title) ?></center></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
