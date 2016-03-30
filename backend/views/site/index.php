<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use backend\models\TrainerAnswer;
use yii\db\Query;

$this->title = 'Home';

?>
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
                                                    
                                                    $val2 = '2018-03-18 10:36:09';
                                                    $currentTime = date("Y-m-d h:i:s");
                                                    $datetime1 = new DateTime($currentTime);
                                                    $datetime2 = new DateTime($val2);

                                                    //get the end time from db
                                                    $endTime = date("F d, Y h:i:s");

                                                    // echo "<pre>";
                                                    // var_dump($datetime1->diff($datetime2));
                                                    // echo date("Y-m-d h:i:s");
                                        ?>

                                                    <?php if($datetime1 > $datetime2){ ?>

                                                    <h1>Time expired</h1>

                                                    <?php }else{ ?>

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
                                                        var d = new Date("March 30, 2016 02:50:00");
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
                                                        diff = min; 

                                                        document.getElementById('bt').innerHTML = diff;
                                                        tt=display_c();
                                                    }
                                                    </script>
                                                    <body onload=display_ct();>
                                                    <p>current time
                                                    <span id='ct' ></span></p>

                                                    <p>end time
                                                    <span id='et' ></span></p>

                                                    <p>bal time
                                                    <span id='bt' ></span></p>
                                        
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
