<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TrainerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trainers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Trainer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'trainer_id',
            'trainer_name',
            'trainer_ic',
            'trainer_studentID',
            'trainer_address',
            // 'trainer_email:email',
            // 'question_id',
            // 'status_id',
            // 'training_id',
            // 'trainerAnswer_id',
            // 'mark_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
