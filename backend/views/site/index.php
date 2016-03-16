<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Home';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Training for trainer!</h1>

        <p class="lead">This exam will require you to answer 100 question within 90 minutes</p>
         <p class="lead">Goodluck</p>

      

        <?= Html::a('START EXAM', ['/site/question1'], ['class'=>'btn btn-info']) ?>

        


    </div>

    <script>
    function startQuiz(url)
    {
        window.location = url;
    }
    </script>

    <div class="body-content">

       <!--  <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p></p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p></p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p></p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div> -->

    </div>
</div>
