<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TrainingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trainings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="training-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Training', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'training_id',
            'training_name',
            'training_date',
            'training_venue',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
