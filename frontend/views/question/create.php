<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Question */

$this->title = 'Create Question';
$this->params['breadcrumbs'][] = ['label' => 'Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">       
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="question-create">

				    <h1><?= Html::encode($this->title) ?></h1> 

				    <?= $this->render('_form', [
				        'model' => $model,
				    ]) ?>

				</div>



            </div>
            </div>
        </div>
    </div>
                
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
