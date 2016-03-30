<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\db\Query;
use yii\widgets\ActiveForm;
use backend\models\Answer;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\widgets\Alert;



/* @var $this yii\web\View */
/* @var $searchModel backend\models\QuestionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */




$trainer_id = Yii::$app->user->identity->id;
$querys = new Query;
$querys -> select(['count(question_id) as totq'])
        -> from('question')
        -> all();
$commands = $querys->createCommand();
$totsoalan = $commands->queryAll();
$total_soalan = $totsoalan[0]['totq'];


$queryj = new Query;
$queryj -> select(['count(trainerAnswer_answer) as totjaw'])
        -> from('trainerAnswer')
        -> where('trainer_id = "'.$trainer_id.'"')
        -> all();
$commandj = $queryj->createCommand();
$totjawapan = $commandj->queryAll();
$total_jawapan = $totjawapan[0]['totjaw'];



$querym = new Query;
$querym -> select(['count(*) as totmark'])
        -> from('trainerAnswer t, answer a')
        -> where('t.question_id = a.question_id and t.trainerAnswer_answer = a.answer_id and a.correct=1')
        -> all();
$commandm = $querym->createCommand();
$totmarkah = $commandm->queryAll();
$total_markah111 = $totmarkah[0]['totmark'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apoigaga | </title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="css/site.css" rel="stylesheet">
</head>


<body class="nav-md">
    <div class="container body">


        <div class="main_container">         

            <!-- page content -->         

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">

                            <?php 

                            if($total_soalan != $total_jawapan)
                            {
                                echo "<center><h1>ONLINE EXAM TRAINING FOR TRAINER</h1></center>";
                                $this->title = 'Questions';

                            }else{
                                echo "<center><h1>YOU HAVE FINISHED ANSWER ALL THE QUESTIONS</h1></center>";

                                
                            }

                            ?>
                                 <div class="question-index">
                                    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
                                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                                    <?php $form = ActiveForm::begin([
                                        'action' => '/TOT/backend/web/index.php?r=question/soalan-seterusnya'

                                        ]);
                                    $number = 1;

                                    foreach ($soalan as $row) {
                                    echo "<div>";
                                        echo "<font size='4'>";
                                        echo  $number.") ".$row['soalan']."<br/>";
                                        echo "</font>";
                                        // echo $row['correct']."<br/>";

                                        $soalan_id = $row['id'];
                                        echo "<input type='hidden' value='".$soalan_id."' name='question_id[".$number."]'>";
                                        $query = new Query;
                                        $query -> select(['answer.answer as answer','answer.answer_id as answerid'])
                                               -> from('question','answer')
                                               -> innerJoin('answer','answer.question_id = question.question_id')
                                               ->where('answer.question_id = "'.$soalan_id.'" ')
                                               ->all();

                                               $command = $query->createCommand();
                                               $xData = $command->queryAll();
                                            
                                                
                                               foreach ($xData as $ans) 
                                               {
                                                echo "<font size='3'>";
                                                echo "<ul>";
                                                echo "<input type='radio' name='trainerAnswer[".$number."]' value='".$ans['answerid']."'>".$ans['answer'];
                                                echo "</ul>";
                                                echo "</font>";
                                                

                                                } 
                                                                                              
                                      
                                    echo "</div><br/>";                
                                    $number++;
                                    
                                    }
                                    
                                    echo "<div class='pull-right'>";
                                    if($total_soalan != $total_jawapan)
                                    {
                                        echo "<input type='submit' name='Submit' value='Next' class='btn btn-success' /> ";
                                    
                                    }else{
                                                
                                    }

                                    echo "</div>";

                                    
                                    if($total_soalan != $total_jawapan)
                                    {

                                    }else{

                                        $connectionsavemark= Yii::$app->db;
                                        $connectionsavemark->createCommand("
                                                            INSERT INTO mark
                                                            (mark_total, trainer_id)
                                                            VALUES 
                                                            ('".$total_markah111."', '".$trainer_id."') 
                                                            ")->execute();

                                        echo "<div class='jumbotron' >";

                                        echo "<h2>You answered</h2>";
                                        echo "<h1>".$total_markah111."/".$total_soalan."</h1>";
                                        echo "<h2>Correct!</h2>";

                                        echo "</div>";
                                    }
                                     ActiveForm::end();
                                    ?>
                                     
                                    </div>
                             </div>
                        </div>
        </div>
    </div>

  <script>
    function countDown(secs,elem) {
    var element = document.getElementById(elem);
    element.innerHTML = "Please wait for "+secs+" seconds";
    if(secs < 1) 
    {
        clearTimeout(timer);
        element.innerHTML = '<h2>Countdown Complete!</h2>';
        //element.innerHTML += '<a href="/TOT/backend/web/index.php?r=question%2Fmark" data-method="post">Click here now</a>';
        window.location.href = "/TOT/backend/web/index.php?r=question%2Fmark";
    }

    secs--;
    var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
    }
    </script>

    <div id="status"></div>
    
    <?php

    $currentTime = date("Y-m-d h:i:s");
    $strStart = '2013-06-19 18:00'; 
    $strEnd   = '2013-06-19 19:40';

    $dteStart = new DateTime($strStart); 
    $dteEnd   = new DateTime($strEnd);

    $dteDiff  = $dteStart->diff($dteEnd);
    $dteDiffSeconds = $dteDiff->format("%I");
    echo "<script>countDown($dteDiffSeconds,'status');</script>"

    ?>
             
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

</html>



   



                

            



                                    
                                   
                                    


                                                 

