<?php

use yii\helpers\Html;

<<<<<<< HEAD
$this->title = 'TOT';
=======

$this->title = 'Home';

$this->title = 'Training of Trainers';
>>>>>>> ceee8c5e047def7a0ad813aadd96e0b38314d096
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>TOT</span></h1>
            <p class="animated fadeInRightBig">It's not what you teach but how you teach it</p>
            <?= Html::a('Start Exam', ['/site/start-exam'], ['class'=>'btn btn-start animated fadeInUpBig']) ?>
          </div>
        </div>
<<<<<<< HEAD
        <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Come Join <span>Us</span></h1>
            <p class="animated fadeInRightBig">Hard Work Pays Off</p>
            <?= Html::a('Start Exam', ['/site/start-exam'], ['class'=>'btn btn-start animated fadeInUpBig']) ?>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Trainer</span></h1>
            <p class="animated fadeInRightBig">Let Me Inspire You</p>
            <?= Html::a('Start Exam', ['/site/start-exam'], ['class'=>'btn btn-start animated fadeInUpBig']) ?>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <!-- <a id="tohash" ><i class="fa fa-angle-down"></i></a> -->
=======
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->


    <div class="body-content">

       



<body class="nav-md">

    <div class="container body">
        <div class="main_container">
            <div class="main_container">
                <div class="clearfix"></div>
                    <div class="row">
                         <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                               <div class="x_content">

                                    <div class="jumbotron">
                                        <h1>Training for trainer!</h1>

                                        <p class="lead">This exam will require you to answer 100 question within 90 minutes</p>
                                         <p class="lead">Goodluck</p>
                                         <?php 

                                             date_default_timezone_set('Asia/Kuala_Lumpur');

                                            $queryT = new Query;
                                            $queryT -> select(['exam_start'])
                                                    -> from('examTime')
                                                    -> all();

                                            $commandT = $queryT->createCommand();
                                            $time = $commandT->queryAll();
                                            $dataT = $time[0]['exam_start'];



                                            
                                                    
                                                    $val2 = $dataT;
                                                    $currentTime = date("Y-m-d h:i:s");
                                                    $datetime1 = new DateTime($currentTime);
                                                    $datetime2 = new DateTime($val2);

                                                    // echo $currentTime."<br>"; 
                                                    // echo $val2;

                                                    //get the end time from db
                                                    $endTime = date("F d, Y h:i:s");

                                                    // echo "<pre>";
                                                    // var_dump($datetime1->diff($datetime2));
                                                    // echo date("Y-m-d h:i:s");
                                        ?>

                                                    <?php if($datetime1 < $datetime2){ ?>
>>>>>>> ceee8c5e047def7a0ad813aadd96e0b38314d096


<<<<<<< HEAD
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

=======
                                                    <?php }else{?>

                                                        <?= Html::a('START EXAM', ['/question/soalan'], ['class'=>'btn btn-info']) ?><br><br><br><br><br><br><br>
                                        
                                                    <?php } ?>

                                                    <script type="text/javascript"> 
                                                    function display_c(){
                                                    var refresh=1000; // Refresh rate in milli seconds
                                                    mytime=setTimeout('display_ct()',refresh)
                                                    }

                                                    function display_ct() {
                                                        var strcount
                                                        var x = new Date()
                                                        var x1=x.getHours( )+ ":" + x.getMinutes() + ":" + x.getSeconds();
                                                        // var d = new Date("<?php echo $endTime ?>");
                                                        var d = new Date("<?=$dataT?>");
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

                                                        
                                                        tt=display_c();
                                                    }
                                                    </script>
                                                    <body onload=display_ct();>
                                                    <p>Current Time
                                                    <span id='ct' ></span></p>

                                                    <p>Exam Start
                                                    <span id='et' ></span></p>
                                        
                                    </div>
>>>>>>> ceee8c5e047def7a0ad813aadd96e0b38314d096

</body>
</html>
