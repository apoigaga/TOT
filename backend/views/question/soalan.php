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

<!-- <body onload=display_ct();>
<p>current time
<span id='ct' ></span></p>

<p>end time
<span id='et' ></span></p>

<p>bal time
<span id='bt' ></span></p>    -->                     

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

                            <!-- <div class="panel panel-default">
                              <div class="panel-body">
                                Basic panel example
                              </div>
                            </div>
 -->
                            <!-- <iframe src="http://localhost/TOT/backend/web/index.php?r=question%2Fsoalan" width="100%" height="650" frameborder="0" scrolling="yes"></iframe> -->
                            <?php 

                            if($total_soalan != $total_jawapan)
                            {
                                echo "<center><h1>ONLINE EXAM TRAINING FOR TRAINER</h1></center>";
                                $this->title = 'Questions';

                            }else{
                                
                                 header("Location: /TOT/backend/web/index.php?r=question%2Fmark"); 
                                exit();                                        

                            }

                            ?>
                            
                                 <div class="question-index">
                                    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
                                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                                    <?php $form = ActiveForm::begin([
                                        'action' => '/TOT/backend/web/index.php?r=question/soalan-seterusnya'

                                        ]);

                                    $number = $numbersoalan;

                                    foreach ($soalan as $row) {
                                    echo "<div>";
                                        echo "<font size='5'>";
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
                                               ->orderBy(' rand()')
                                               ->all();

                                               $command = $query->createCommand();
                                               $xData = $command->queryAll();
                                            
                                                
                                               foreach ($xData as $ans) 
                                               {

                                                echo "<font size='3'>";
                                                echo "<ul>";
                                                echo "<label>";
                                                echo "<input type='radio' id='myRadio' name='trainerAnswer[".$number."]' value='".$ans['answerid']."' required>".$ans['answer'];
                                                echo "</label>";
                                                echo "</ul>";
                                                echo "</font>";
                                                

                                                } 
                                                                                              
                                      
                                    echo "</div><br/>";                
                                    $number++;
                                    
                                    }
                                    echo "<br>";
                                    echo "<div class='pull-right'>";
                                    if($total_soalan != $total_jawapan)
                                    {
                                        echo "<br>";
                                        echo "<input type='submit' name='Submit' value='Finish' class='btn btn-success' /> ";
                                        echo "<br>";

                                    }else{
                                                
                                    }

                                    echo "</div>";
                                    echo "<br>";

                                    
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

                                        // echo "<div class='jumbotron' >";

                                        // echo "<h2>You answered</h2>";
                                        // echo "<h1>".$total_markah111."/".$total_soalan."</h1>";
                                        // echo "<h2>Correct!</h2>";

                                        // echo "</div>";
                                    }
                                     ActiveForm::end();
                                    ?>
                                     
                                    </div>
                             </div>
                        </div>
        </div>
    </div>

    <?php 

    $queryT = new Query;
    $queryT -> select(['exam_end'])
            -> from('examTime')
            -> all(); 

    $commandT = $queryT->createCommand();
    $time = $commandT->queryAll();
    $dataT = $time[0]['exam_end'];



        echo $dataT;       

    ?>
  
             
    <script type="text/javascript"> 
        function display_c(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct()',refresh)
        }

        function display_ct() {
            var strcount;
            var x = new Date();
            var x1=x.getHours( )+ ":" + x.getMinutes() + ":" + x.getSeconds();
            var d = new Date("<?php echo $dataT ?>");
            var x2=d.getHours( )+ ":" + d.getMinutes() + ":" + d.getSeconds();
            document.getElementById('ct').innerHTML = x1;
            document.getElementById('et').innerHTML = x2;

            s = x1.split(':');
            e = x2.split(':');
            min = e[1]-s[1];
            hour_carry = 0;
            if(min < 0){
                min += 60;
                hour_carry += 1;
            }
            hour = e[0]-s[0]-hour_carry;
            diff = hour;

            if(diff < 0)
            {
                window.location.href = "/TOT/backend/web/index.php?r=question%2Fmark";
            }


            document.getElementById('bt').innerHTML = diff;
            tt=display_c();
    }

    //******radio button required before proceed to the next page*****//
    function myFunction() {
        var x = document.getElementById("myRadio").required;
        document.getElementById("demo").innerHTML = x;
    }
    </script>


        

    
   
</body>

</html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<title></title>
<script language ="javascript" >
var tim;
var min = 90;
var sec = 60;
var f = new Date();
function f1() {
f2();
document.getElementById("starttime").innerHTML = "Your started your Exam at " + f.getHours() + ":" + f.getMinutes();

}
function f2() {
if (parseInt(sec) > 0) {
sec = parseInt(sec) - 1;
document.getElementById("showtime").innerHTML = "Your Left Time is :"+min+" Minutes ," + sec+" Seconds";
tim = setTimeout("f2()", 1000);
}
else {
if (parseInt(sec) == 0) {
min = parseInt(min) - 1;
if (parseInt(min) == 0) {
clearTimeout(tim);
location.href = "default5.aspx";
}
else {
sec = 60;
document.getElementById("showtime").innerHTML = "Your Left Time is :" + min + " Minutes ," + sec + " Seconds";
tim = setTimeout("f2()", 1000);
}
}
}
}
</script>
</head>
<body onload="f1()" >
<form id="form1" runat="server">
<div>
<table width="100%" align="center">
<tr>
<td colspan="2">
<h2>This is head part for showing timer and all other details</h2>
</td>
</tr>
<tr>
<td>
<div id="starttime"></div>
<div id="endtime"></div>
<div id="showtime"></div>
</td>
</tr>
<tr>
<td>
</td>
</tr>
</table>

</div>
</form>
</body>
</html>





   



                

            



                                    
                                   
                                    


                                                 

