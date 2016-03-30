<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\QuestionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Questions';
$this->params['breadcrumbs'][] = $this->title;
?>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">       
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="question-index">
                    <h1><?= Html::encode($this->title) ?></h1>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                    <p>
                        <?= Html::a('Create Question', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>

                    <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                     'question_id',
                    'question',
                    'code',
                    'section',

                    ['class' => 'yii\grid\ActionColumn'],
                    ],
                    ]); ?>

                </div>
            </div>
            </div>
        </div>
    </div>
                
                <!-- footer content -->
            <footer>
                <div class="">
                    <p class="pull-right">Apoigaga <a></a>. |
                        <span class="lead"> <i class="fa fa-paw"></i> CBIC</span>
                    </p>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->    


            

</body>
