<?php

use yii\helpers\Html;

$this->title = 'TOT';
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


  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/main.js"></script>


</body>
</html>