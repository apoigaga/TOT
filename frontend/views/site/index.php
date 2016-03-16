<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
    
        <style>
            .jumbotron { 
            background-color: #ff3399; /* Orange */
            color: #ffffff;
            }
        </style>

        <h1>Training of Trainers!</h1>

        <p class="lead">It's not what you teach but how you teach it.</p>

        <p>
            <?= Html::a('Register Trainer', ['trainer/create/'], ['class'=>'btn btn-success']) ?>

        </p>
    </div>

    <div class="body-content">

       

    </div>
</div>
