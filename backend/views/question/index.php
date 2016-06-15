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
            <div class="x_panel">
                <div class="question-index">
                    <p>
                        <?= Html::a('Create Question', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>

                <table class="table table-hover table-bordered" style="width:100%" >
                <thead >
                    <tr>
                        <th style = "text-align:center">Question ID</th>
                        <th style = "text-align:center">Question</th> 
                        <th style = "text-align:center">Code</th>                      
                        <th style = "text-align:center">Section</th> 
                        <th style = "text-align:center">Action</th>                       
                    </tr>
                </thead>
                <tbody>               

                <?php foreach ($question as $question): ?>
                    <tr>
                        <td class="col-lg-1" style = "text-align:center"><?= $question['question_id'] ?></td>
                        <td class="col-lg-7" style = "text-align:justify"><?= $question['question'] ?></td>
                        <td class="col-lg-1" style = "text-align:center"><?= $question['code'] ?></td>
                        <td class="col-lg-1" style = "text-align:center"><?= $question['section'] ?></td>
                        <td class="col-lg-2" style="text-align:center"><?= Html::a('<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>', ['update', 'id' => $question->question_id], ['class' => 'btn btn-info btn-xs']) ?>
                            <?= Html::a('<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>', ['view', 'id' => $question->question_id], ['class' => 'btn btn-success btn-xs']) ?>
                            <?= Html::a('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', ['delete', 'id' => $question['question_id']], [
                            'class' => 'btn btn-danger btn-xs',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                         
                        </td>                       
                    </tr>
                <?php endforeach; ?>    
                </tbody>
                </table>

                    <div class="x_content" >


                 </div>
            </div>
            </div>
        </div>
    </div>
