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


<div  align="center">
    <div class="x_panel">
        <?php
        //KENA BETULKAN CALCULATION

        $totalAll=($total_markah111/$total_jawapan*100);

        if($total_markah111 < 30)
            {
                echo "<center><h3>YOU HAVE FINISHED ANSWER ALL THE QUESTIONS</h3></center>";
                echo "<h2>Please try again!!!</h2>";
                echo "<h2>YOUR SCORE!</h2>";                
               // echo "<h1>FAIL!</h1>";
                //return Yii::$app->response->redirect(Url::to(['site\index']));
               // echo "<button><a href='/TOT/backend/web/index.php?r=question/back'>Answer Again</a></button>";

            }else if(($total_markah111 <= 40) && ($total_markah111 >= 31))      {

                echo "<center><h3>YOU HAVE FINISHED ANSWER ALL THE QUESTIONS</h3></center>";
                echo "<h2>Please try again!!!</h2>";
                echo "<h2>YOUR SCORE!</h2>";                
                //echo "<h1>LOW COMPETENT!</h1>";
               // echo number_format((float)$totalAll, 2, '.', ''); 


            }else if(($total_markah111 <=50 ) && ($total_markah111 >= 41)) {

                echo "<center><h3>YOU HAVE FINISHED ANSWER ALL THE QUESTIONS</h3></center>";
                echo "<h3>Congratulations, You have passed the exam!</h3>";
                echo "<h2>YOUR SCORE!</h2>";
                //echo "<h1>COMPETENT!</h1>";
                //echo number_format((float)$totalAll, 2, '.', ''); 


            }else if(($total_markah111 <=60 ) && ($total_markah111 >= 51)) {

                echo "<center><h3>YOU HAVE FINISHED ANSWER ALL THE QUESTIONS</h3></center>";
                echo "<h3>Congratulations, You have passed the exam!</h3>";
                echo "<h2>YOUR SCORE!</h2>";
                //echo "<h1>HIGHLY COMPETENT!</h1>";
                //echo number_format((float)$totalAll, 2, '.', ''); 
            }


        //echo $totalAll; 
        //echo "<h2>You answered</h2>";
        echo "<h1>".$total_markah111."/".$total_jawapan."</h1>";
        //echo "<h2>Correct!</h2>";
        echo "<h3>Minimum score to pass is 41/60</h3>";

        ?>
</div>
</div>
       

   <div align="center">   

 <div class="panel panel-primary" style="width:500px" >
    <div class="panel-heading"><b><h4>Score Competency Table</h4></b></div>
    <div class="panel-body">
        <table class = "table table-bordered table-hover" style="width:450px">
            <thead style ="background-color:pink">
                <th>Score</th>
                <th>Grade</th>
            </thead>
            <tbody>
                <tr>
                    <td>51 - 60</td>
                    <td>Highly Competent</td>
                </tr>
                <tr>
                    <td>41 - 50</td>
                    <td>Competent</td>
                </tr>
                <tr>
                    <td>31 - 40</td>
                    <td>Moderate</td>
                </tr>
                <tr>
                    <td>Below 30</td>
                    <td>Fail*</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<img src="images/feedbackform.jpg" alt="Smiley face" height="200" width="200">
<br>
<br>
<a class="btn btn-primary" href="https://cbic1.typeform.com/to/lwaZAO" role="button"> Feedback </a>
</div>