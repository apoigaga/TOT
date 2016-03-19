<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

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
                                        <?= Html::a('START EXAM', ['/question/soalan'], ['class'=>'btn btn-info']) ?><br><br><br><br><br><br><br>
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
