<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Trainer */

$this->title = $model->trainer_id;
$this->params['breadcrumbs'][] = ['label' => 'Trainers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->trainer_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->trainer_id], [
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
            'trainer_id',
            'trainer_name',
            'trainer_icNO',
            'trainer_address',
            'trainer_phoneNO',
            'trainer_email:email',
            'trainer_race',
            'trainer_maritialStatus',
            'trainer_highestQualification',
            'trainer_occupation',
            'trainer_dateOfTraining',
            'gender_ID',
        ],
    ]) ?>

</div>
