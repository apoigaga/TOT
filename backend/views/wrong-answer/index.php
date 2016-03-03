<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WrongAnswerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wrong Answers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrong-answer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wrong Answer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'wrongAnswer_id',
            'wrongAnswer_wrong',
            'question_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
