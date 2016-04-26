<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\db\Query;
use yii\db\Command;
use backend\models\Trainer;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MarkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Marks';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php

    $queryu = new Query;
    $queryu -> select(['trainer.trainer_id AS id', 'trainer.trainer_name AS name','mark.mark_total AS mark'])
            -> from('trainer', 'mark')
            -> innerJoin('mark','mark.trainer_id = trainer.trainer_id')
            //-> where('trainer.trainer_id AS id = mark.trainer_id')
            -> all();
    $commandu = $queryu->createCommand();
    $datau = $commandu->queryAll();
    // $dataT = $datau[0]['name'];
    // $datat = $datau[0]['id'];

    $querym = new Query;
    $querym -> select(['count(*) as totmark'])
            -> from('trainerAnswer t, answer a')
            -> where('t.question_id = a.question_id and t.trainerAnswer_answer = a.answer_id and a.correct=1')
            -> all();
    $commandm = $querym->createCommand();
    $totmarkah = $commandm->queryAll();
    $total_markah111 = $totmarkah[0]['totmark'];

    $querys = new Query;
    $querys -> select(['count(question_id) as totq'])
            -> from('question')
            -> all();
    $commands = $querys->createCommand();
    $totsoalan = $commands->queryAll();
    $total_soalan = $totsoalan[0]['totq'];

  //  echo $total_markah111; 
   // echo $totalAll=($total_markah111/$total_soalan*100);

?>

<div class="col-md-6 col-sm-6 col-xs-12" >
    <div class="x_panel" >
        <div class="x_title" >
            <h2>Marks</h2>
            <div class="clearfix" ></div>
        </div>
        <div class="x_content" >
            <table class="table table-hover" >
                <thead >
                    <tr>
                        <th>#</th>
                        <th>Trainer ID</th>
                        <th></th>
                        <th>Trainer Name</th>
                        <th></th>
                        <th>Trainer Marks</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ($datau as $row): ?>
                    <tr>
                        <th scope="row">1</th>
                        <td><?= $row['id'] ?></td>
                        <td></td>
                        <td><?= $row['name'] ?></td>
                        <td></td>
                        <td><?= $row['mark']/$total_soalan*100 ?></td>
                    </tr>
                    <?php endforeach; ?>
                    
                </tbody>
            </table>
        </div>
    </div><br><br><br><br><br><br><br><br><br>
</div>




<!-- <body class="nav-md">
    <div class="container body">
        <div class="main_container">       
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="mark-index">

                    <h1><?= Html::encode($this->title) ?></h1>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <p>
                        <?= Html::a('Create Mark', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'mark_id',
                            'mark_total',
                            'trainer_id',
                            'trainerAnswer_id',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>

                </div>



            </div>
            </div>
        </div>
    </div> -->
                
                <!-- footer content -->
           <!--  <footer>
                <div class="">
                    <p class="pull-right">Apoigaga <a></a>. |
                        <span class="lead"> <i class="fa fa-paw"></i> CBIC</span>
                    </p>
                </div>
                <div class="clearfix"></div>
            </footer> -->
            <!-- /footer content -->    

</body>