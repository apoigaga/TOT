<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TrainerSearch */
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
            'trainer_icNO',
            'trainer_address',
            'trainer_phoneNO',
            // 'trainer_email:email',
            // 'trainer_race',
            // 'trainer_maritialStatus',
            // 'trainer_highestQualification',
            // 'trainer_occupation',
            // 'trainer_dateOfTraining',
            // 'gender_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
