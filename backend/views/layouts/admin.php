<?php
use yii\helpers\Html;
?>

<h1>WELCOME TO ADMIN PANEL</h1>                  
<div class="x_content" >
<table class="table table-hover " style="width:100%">
    <thead >
        <tr>
            <th>NO</th>
            <th>ACTION</th>
            <th>EDIT</th>                                                                                               
        </tr>
    </thead>
    <tbody> 
        <tr>
            <th scope="row">1</th>
            <td>Question</td>
            <td><?= Html::a('VIEW', ['/question/index'], ['class'=>'btn btn-info btn-xs']) ?>
                <?= Html::a('CREATE', ['/question/create'], ['class'=>'btn btn-primary btn-xs']) ?></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Answer</td>
            <td><?= Html::a('VIEW', ['/answer/index'], ['class'=>'btn btn-info btn-xs']) ?>
            <?= Html::a('CREATE', ['/answer/create'], ['class'=>'btn btn-primary btn-xs']) ?></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Marks</td>
            <td><?= Html::a('VIEW', ['/mark/index'], ['class'=>'btn btn-info btn-xs']) ?></td>
        </tr> 
        <tr>
            <th scope="row">3</th>
            <td>Statistics answer</td>
            <td><?= Html::a('VIEW', ['/answer/statistic'], ['class'=>'btn btn-info btn-xs']) ?>
            <?= Html::a('GRAPH', ['/answer/graph'], ['class'=>'btn btn-default btn-xs']) ?></td>
        </tr>  
        <tr>
            <th scope="row">3</th>
            <td>Set Timer</td>
            <td><?= Html::a('SET', ['/exam-time/index'], ['class'=>'btn btn-info btn-xs']) ?></td>
        </tr>   
    </tbody>
</table>
</div>