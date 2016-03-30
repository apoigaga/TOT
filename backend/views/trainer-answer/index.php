<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TrainerAnswerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trainer Answers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainer-answer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Trainer Answer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'trainerAnswer_id',
            'trainerAnswer_answer',
            'trainer_id',
            'question_id',
            'mark_id',
            'registered_question',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
