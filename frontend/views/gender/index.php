<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GenderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Genders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gender-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gender', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'gender_id',
            'gender_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>