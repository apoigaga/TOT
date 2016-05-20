<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\db\Query;
use yii\helpers\Url;


$trainer_id = Yii::$app->user->identity->id;

$querym = new Query;
$querym -> select(['count(*) as totmark'])
        -> from('trainerAnswer t, answer a')
        -> where('t.question_id = a.question_id and t.trainerAnswer_answer = a.answer_id and a.correct=1')
        -> andWhere ('trainer_id = "'.$trainer_id.'"')
        -> all();
$commandm = $querym->createCommand();
$totmarkah = $commandm->queryAll();
$total_markah111 = $totmarkah[0]['totmark'];



$querys = new Query;
$querys -> select(['count(question_id) as totq'])
        -> from('question')
        -> all();
$commands = $querys->createCommand();
$totsoalan = $commands->queryAll();
$total_soalan = $totsoalan[0]['totq'];


$connectionsavemark= Yii::$app->db;
$connectionsavemark->createCommand("
                    INSERT INTO mark
                    (mark_total, trainer_id)
                    VALUES 
                    ('".$total_markah111."', '".$trainer_id."') 
                    ")->execute();
echo "<div class='jumbotron' >";

$queryjawa = new Query;
$queryjawa -> select(['count(trainerAnswer_answer) as totjaw'])
        -> from('trainerAnswer')
        -> where('trainer_id = "'.$trainer_id.'"')
        -> all();
$commandjawa = $queryjawa->createCommand();
$totjawapan = $commandjawa->queryAll();
$total_jawapan = $totjawapan[0]['totjaw'];
?>


<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <?php
        //KENA BETULKAN CALCULATION

        $totalAll=($total_markah111/$total_jawapan*100);

        if($totalAll < 50)
            {
                echo "<center><h3>YOU HAVE FINISHED ANSWER ALL THE QUESTIONS</h3></center>";
                echo "<h1>FAIL!</h1>";

                //return Yii::$app->response->redirect(Url::to(['site\index']));

                echo "<button><a href='/TOT/backend/web/index.php?r=question/back'>Answer Again</a></button>";

            }else if(($totalAll <= 69) && ($totalAll >= 50))      {

                echo "<center><h3>YOU HAVE FINISHED ANSWER ALL THE QUESTIONS</h3></center>";

                echo "<h1>LOW COMPETENT!</h1>";

                echo number_format((float)$totalAll, 2, '.', ''); 


            }else if(($totalAll <=89 ) && ($totalAll >= 70)) {

                echo "<h1>COMPETENT!</h1>";

                echo number_format((float)$totalAll, 2, '.', ''); 


            }else if(($totalAll <=100 ) && ($totalAll >= 90)) {

                echo "<h1>HIGHLY COMPETENT!</h1>";

                echo number_format((float)$totalAll, 2, '.', ''); 
            }


        //echo $totalAll; 

        echo "<h2>You answered</h2>";
        echo "<h1>".$total_markah111."/".$total_jawapan."</h1>";
        echo "<h2>Correct!</h2>";

        ?>
    </div>
</div>

