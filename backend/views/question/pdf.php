<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\db\Query;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\QuestionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<style type="text/css">
    .table {
        width: 100%;
        border-left: 1px solid;
        border-top: 1px solid;
           
        border-spacing:0;
        border-collapse: collapse;
        /*border : 1px solid;
        padding : 3px;
        border-left: thin solid;
        border-right: thin solid;
        border-bottom: thin solid #000000;
        border-top: thin solid;*/
        /*border-left: 1px solid;*/
        /*border-top: 1px solid;*/
        /*border-right: 1px solid;*/
        /*border-bottom: 1px solid;*/
    }
    .td 
        {
            border-right: 1px solid;
            border-bottom: 1px solid;
            padding: 2mm;
        }
    .noborder {
        padding : 3px;
    }
</style>
<?php

    $query = new Query;
    $query -> select(['question_id','question','section','level'])
           -> from('question')
           -> all();
    $command = $query->createCommand();
    $question = $command->queryAll();

?>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">       
            <div class="x_panel">
                <div class="question-index">
                <table class="table table-hover table-bordered" style="width:100%" >
                <thead >
                    <tr>
                        <th class = "td" style = "text-align:center">Question ID</th>
                        <th class = "td" style = "text-align:center">Question</th>                 
                        <th class = "td" style = "text-align:center">Section</th> 
                        <th class = "td" style = "text-align:center">Level</th>                     
                    </tr>
                </thead>
                <tbody>               

                <?php foreach ($question as $question): ?>
                    <tr>
                        <td class = "td" style = "text-align:center"><?= $question['question_id'] ?></td>
                        <td class = "td" style = "text-align:justify"><?= $question['question'] ?></td>
                        <td class = "td" style = "text-align:center"><?= $question['section'] ?></td>      
                        <td class = "td" style = "text-align:center"><?= $question['level'] ?></td>
                   
                         
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
