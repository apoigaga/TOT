<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\db\Query;
use yii\db\Command;
use backend\models\Trainer;
use backend\models\Mark;
use backend\models\User;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $model frontend\models\MinButiran */

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

     $trainer_id = Yii::$app->user->identity->id;

    $queryu = new Query;
    $queryu -> select(['user.id AS id', 'user.ic_number AS ic','user.username AS name','mark.mark_total AS mark'])
            -> from('user', 'mark')
            -> innerJoin('mark','mark.trainer_id = user.id')
            //-> where('trainer.trainer_id AS id = mark.trainer_id')
            -> all();
    $commandu = $queryu->createCommand();
    $datau = $commandu->queryAll();
    // $dataT = $datau[0]['name'];
    // $datat = $datau[0]['id'];

    // /********************total mark***************************/
    $querym = new Query;
    $querym -> select(['count(*) as totmark'])
            -> from('trainerAnswer t, answer a')
            -> where('t.question_id = a.question_id and t.trainerAnswer_answer = a.answer_id and a.correct=1')
            -> all();
    $commandm = $querym->createCommand();
    $totmarkah = $commandm->queryAll();
    $total_markah111 = $totmarkah[0]['totmark'];

    /**************total question***********************************/
    $querys = new Query;
    $querys -> select(['count(question_id) as totq'])
            -> from('question')
            -> all();
    $commands = $querys->createCommand();
    $totsoalan = $commands->queryAll();
    $total_soalan = $totsoalan[0]['totq'];

     $numbersoalan=1;

  //  echo $total_markah111; 
   // echo $totalAll=($total_markah111/$total_soalan*100);

?>

<div class="col-md-6 col-sm-6 col-xs-12" >
    <div class="x_panel" >
        <div class="x_title" >
            <h2>Trainer Marks</h2>
            <div class="clearfix" ></div>
        </div>
        <div class="x_content" >
            <table class="table table-hover" >
                <thead >
                    <tr>
                        <th class = "td">No</th>
                        <th class = "td">Trainer ID</th> 
                        <th class = "td">Ic Number</th>                      
                        <th class = "td">Trainer Name</th>
                        <th class = "td">Mark</th>
                        
                    </tr>
                </thead>
                <tbody>

                

                <?php foreach ($datau as $row): ?>
                    <tr>
                        <td class = "td" align="center"><?=  $numbersoalan++; ?></th>
                        <td class = "td" align="center"><?= $row['id'] ?></td>
                        <td class = "td" align="center"><?= $row['ic'] ?></td>                       
                        <td class = "td" align=""><?= $row['name'] ?></td>
                        <td class = "td" align="center"><?= $row['mark']."/60" ?></td>
                        <!-- <td><?= number_format((float)$row['mark']/$total_soalan*100, 2, '.', ''); ?></td> -->
                    </tr>
                    <?php endforeach; ?>
                   
                    
                </tbody>
            </table>
        </div>
    </div><br><br><br><br><br><br><br><br><br>
</div>
