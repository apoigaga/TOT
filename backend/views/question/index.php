<<<<<<< HEAD
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\QuestionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">       
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="question-index">
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
=======



















            
        
          
            
                    
                  
                   
                     
                   

                  
                   
                  
               
                   

               
                
>>>>>>> dec5f0fa982c2724d64f5639f50bbe9599081c95
                
                 

               
                  
                 






                












            


