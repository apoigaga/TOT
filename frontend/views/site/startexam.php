<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Start Exam';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-startexam">

 
</div>

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

                                        <iframe width="350" height="240" src="https://w2.countingdownto.com/1362248" frameborder="0"></iframe><p><a href="https://countingdownto.com">Countdown Clock</a></p>

                                        <p class="lead">This exam will require you to answer 100 question within 90 minutes</p>
                                         <p class="lead">Goodluck</p>
                                         <?php 
                                                    $currentTime = date("Y-m-d h:i:s");
                                                    $val2 = '2018-03-18 10:36:09';

                                                    $datetime1 = new DateTime($currentTime);
                                                    $datetime2 = new DateTime($val2);
                                                    // echo "<pre>";
                                                    // var_dump($datetime1->diff($datetime2));
                                                    // echo date("Y-m-d h:i:s");
                                        ?>

                                                    <?php if($datetime1 > $datetime2){ ?>

                                                    <h1>Time expired</h1>

                                                    <?php }else{ ?>

                                                        <?= Html::a('START EXAM', ['/question/soalan'], ['class'=>'btn btn-info']) ?><br><br><br><br><br><br><br>
                                        
                                                    <?php } ?>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
