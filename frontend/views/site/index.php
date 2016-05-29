<?php

use yii\helpers\Html;
use kartik\dialog\Dialog;

$this->title = 'Home';

$this->title = 'Training of Trainers';

?>

<style type="text/css"> 
.jumbotron {
  background: rgb(200, 54, 54);
  background: rgba(200, 54, 54, 0.5);
}
</style>

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
            
            <?php echo Dialog::widget(); ?>
            <button type="button" id="btn-confirm" class="btn btn-start animated fadeInUpBig">Start Exam</button>
            
          </div>
        </div>

       <!--  <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Come Join <span>Us</span></h1>
            <p class="animated fadeInRightBig">Hard Work Pays Off</p>

            <button type="button" id="btn-confirm" class="btn btn-start animated fadeInUpBig">Start Exam</button>

          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Trainer</span></h1>
            <p class="animated fadeInRightBig">Let Me Inspire You</p>

            <button type="button" id="btn-confirm" class="btn btn-start animated fadeInUpBig">Start Exam</button>

          </div> -->
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>


      <!-- <a id="tohash" ><i class="fa fa-angle-down"></i></a> -->

        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script>
    $("#btn-confirm").on("click", function() {
        krajeeDialog.confirm("This exam will require you to answer 60 question within 90 minutes. Goodluck!!!", function (result) {
            if (result) {
              // alert('Great! You accepted!');
              document.location.href = '/TOT/frontend/web/index.php?r=question%2Fsoalan'
            }
        });
    });
  </script>

</body>
</html>
