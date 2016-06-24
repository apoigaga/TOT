<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\db\Query;
use yii\db\Command;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AnswerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Statistics';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php

$query1 = new Query;
$query1-> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=1')
        ->andwhere('trainerAnswer_answer = 4')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query2 = new Query;
$query2 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=2')
        ->andwhere('trainerAnswer_answer = 5')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query3 = new Query;
$query3 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=3')
        ->andwhere('trainerAnswer_answer = 10')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query4 = new Query;
$query4 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=4')
        ->andwhere('trainerAnswer_answer = 16')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query5 = new Query;
$query5 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=5')
        ->andwhere('trainerAnswer_answer = 20')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query6 = new Query;
$query6 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=6')
        ->andwhere('trainerAnswer_answer = 21')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query7 = new Query;
$query7 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=7')
        ->andwhere('trainerAnswer_answer = 25')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query8 = new Query;
$query8 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=8')
        ->andwhere('trainerAnswer_answer = 31')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query9 = new Query;
$query9 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=9')
        ->andwhere('trainerAnswer_answer = 34')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query10 = new Query;
$query10 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=10')
        ->andwhere('trainerAnswer_answer = 39')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query11 = new Query;
$query11 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=11')
        ->andwhere('trainerAnswer_answer = 42')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query12 = new Query;
$query12 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=12')
        ->andwhere('trainerAnswer_answer = 46')
        ->andwhere('trainerAnswer_answer IS NOT NULL '); 

$query13 = new Query;
$query13 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=13')
        ->andwhere('trainerAnswer_answer = 52')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query14 = new Query;
$query14 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=14')
        ->andwhere('trainerAnswer_answer = 53')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query15 = new Query;
$query15-> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=15')
        ->andwhere('trainerAnswer_answer = 59')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query16 = new Query;
$query16 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=16')
        ->andwhere('trainerAnswer_answer = 64')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query17 = new Query;
$query17 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=17')
        ->andwhere('trainerAnswer_answer = 68')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query18 = new Query;
$query18 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=18')
        ->andwhere('trainerAnswer_answer = 71')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query19 = new Query;
$query19 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=19')
        ->andwhere('trainerAnswer_answer = 73')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query20 = new Query;
$query20 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=20')
        ->andwhere('trainerAnswer_answer = 77')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query21 = new Query;
$query21 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=21')
        ->andwhere('trainerAnswer_answer = 84')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query22 = new Query;
$query22 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=22')
        ->andwhere('trainerAnswer_answer = 87')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query23 = new Query;
$query23 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=23')
        ->andwhere('trainerAnswer_answer = 89')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query24 = new Query;
$query24 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=24')
        ->andwhere('trainerAnswer_answer = 96')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query25 = new Query;
$query25 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=25')
        ->andwhere('trainerAnswer_answer = 100')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query26 = new Query;
$query26 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=26')
        ->andwhere('trainerAnswer_answer = 104')
        ->andwhere('trainerAnswer_answer IS NOT NULL '); 

$query27 = new Query;
$query27 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=27')
        ->andwhere('trainerAnswer_answer = 107')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query28 = new Query;
$query28 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=28')
        ->andwhere('trainerAnswer_answer = 110')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');        


$command = $query1->union($query2)->union($query3)->union($query4)->union($query5)->union($query6)->union($query7)->union($query8)->union($query9)->union($query10)->union($query11)->union($query12)->union($query13)->union($query14)->union($query15)->union($query16)->union($query17)->union($query18)->union($query19)->union($query20)->union($query21)->union($query22)->union($query23)->union($query24)->union($query25)->union($query26)->union($query27)->union($query28)->createCommand();
$data= $command->queryAll();

// $query2 = new Query;
// $query2 -> select(['registered_question as 2','count(trainerAnswer_answer) as total2'])
//         -> from('trainerAnswer')
//         -> where('question_id=2')
//         ->andwhere('trainerAnswer_answer = 5')
//         ->andwhere('trainerAnswer_answer IS NOT NULL ')
//         -> all();
// $command2 = $query2->createCommand();
// $data2= $command2->queryAll();

// $query3 = new Query;
// $query3 -> select(['registered_question','count(trainerAnswer_answer) as total'])
//         -> from('trainerAnswer')
//         -> where('question_id=1')
//         ->andwhere('trainerAnswer_answer = 4')
//         ->andwhere('trainerAnswer_answer IS NOT NULL ')
//         -> all();
// $command1 = $query1->createCommand();
// $totquestion1= $command1->queryAll();

// $query4 = new Query;
// $query4 -> select(['registered_question','count(trainerAnswer_answer) as total'])
//         -> from('trainerAnswer')
//         -> where('question_id=1')
//         ->andwhere('trainerAnswer_answer = 4')
//         ->andwhere('trainerAnswer_answer IS NOT NULL ')
//         -> all(); 
// $command1 = $query1->createCommand();
// $totquestion1= $command1->queryAll();                       


$numbersoalan = 1;

?>

<div class="x_content" >
<table class="table table-hover " style="width:100%">
    <thead >
        <tr>
            <th>No</th>
            <th>Questions</th>
            <th>Total</th>                                                                  
        </tr>
    </thead>
    <tbody>

<?php foreach ($data as $row): ?>
<tr>
    <th scope="row"><?=  $numbersoalan++; ?></th>
    <td> <?= $row['question_id']  ?></td>  
    <td> <?= $row['total']  ?></td>  
<tr>
 <?php endforeach; ?>

</tbody>
    </table>
</div>

<!-- SELECT registered_question ,count(trainerAnswer_answer) as total
FROM trainerAnswer
WHERE question_id =2
and trainerAnswer_answer = 5
AND trainerAnswer_answer IS NOT NULL  -->
 
