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
        ->andwhere('trainerAnswer_answer = 11')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query4 = new Query;
$query4 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=4')
        ->andwhere('trainerAnswer_answer = 15')
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

$query29 = new Query;
$query29-> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=29')
        ->andwhere('trainerAnswer_answer = 113')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query30 = new Query;
$query30 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=30')
        ->andwhere('trainerAnswer_answer = 118')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query31 = new Query;
$query31 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=31')
        ->andwhere('trainerAnswer_answer = 124')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query32 = new Query;
$query32 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=32')
        ->andwhere('trainerAnswer_answer = 126')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query33 = new Query;
$query33 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=33')
        ->andwhere('trainerAnswer_answer = 130')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query34 = new Query;
$query34 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=34')
        ->andwhere('trainerAnswer_answer = 135')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query35 = new Query;
$query35 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=35')
        ->andwhere('trainerAnswer_answer = 137')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query36 = new Query;
$query36 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=36')
        ->andwhere('trainerAnswer_answer = 141')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query37 = new Query;
$query37 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=37')
        ->andwhere('trainerAnswer_answer = 146')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query38 = new Query;
$query38 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=38')
        ->andwhere('trainerAnswer_answer = 150')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query39 = new Query;
$query39 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=39')
        ->andwhere('trainerAnswer_answer = 154')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');           

$query40 = new Query;
$query40 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=40')
        ->andwhere('trainerAnswer_answer = 158')
        ->andwhere('trainerAnswer_answer IS NOT NULL '); 

$query41 = new Query;
$query41 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=41')
        ->andwhere('trainerAnswer_answer = 162')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query42 = new Query;
$query42 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=42')
        ->andwhere('trainerAnswer_answer = 165')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query43 = new Query;
$query43-> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=43')
        ->andwhere('trainerAnswer_answer = 170')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query44 = new Query;
$query44 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=44')
        ->andwhere('trainerAnswer_answer = 176')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query45 = new Query;
$query45 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=45')
        ->andwhere('trainerAnswer_answer = 180')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query46 = new Query;
$query46 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=46')
        ->andwhere('trainerAnswer_answer = 184')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query47 = new Query;
$query47 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=47')
        ->andwhere('trainerAnswer_answer = 186')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query48 = new Query;
$query48 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=48')
        ->andwhere('trainerAnswer_answer = 190')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query49 = new Query;
$query49 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=49')
        ->andwhere('trainerAnswer_answer = 194')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query50 = new Query;
$query50 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=50')
        ->andwhere('trainerAnswer_answer = 199')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query51 = new Query;
$query51 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=51')
        ->andwhere('trainerAnswer_answer = 202')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query52 = new Query;
$query52 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=52')
        ->andwhere('trainerAnswer_answer = 207')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query53 = new Query;
$query53 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=53')
        ->andwhere('trainerAnswer_answer = 212')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query54 = new Query;
$query54 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=54')
        ->andwhere('trainerAnswer_answer = 214')
        ->andwhere('trainerAnswer_answer IS NOT NULL '); 

$query55 = new Query;
$query55 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=55')
        ->andwhere('trainerAnswer_answer = 220')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query56 = new Query;
$query56 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=56')
        ->andwhere('trainerAnswer_answer = 222')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  


$query57 = new Query;
$query57-> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=57')
        ->andwhere('trainerAnswer_answer = 225')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query58 = new Query;
$query58 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=58')
        ->andwhere('trainerAnswer_answer = 230')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query59 = new Query;
$query59 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=59')
        ->andwhere('trainerAnswer_answer = 235')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query60 = new Query;
$query60 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=60')
        ->andwhere('trainerAnswer_answer = 237')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query61 = new Query;
$query61 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=61')
        ->andwhere('trainerAnswer_answer = 244')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query62 = new Query;
$query62 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=62')
        ->andwhere('trainerAnswer_answer = 248')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query63 = new Query;
$query63 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=63')
        ->andwhere('trainerAnswer_answer = 249')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query64 = new Query;
$query64 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=64')
        ->andwhere('trainerAnswer_answer = 256')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query65 = new Query;
$query65 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=65')
        ->andwhere('trainerAnswer_answer = 258')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query66 = new Query;
$query66 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=66')
        ->andwhere('trainerAnswer_answer = 261')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query67 = new Query;
$query67 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=67')
        ->andwhere('trainerAnswer_answer = 269')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query68 = new Query;
$query68 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=68')
        ->andwhere('trainerAnswer_answer = 272')
        ->andwhere('trainerAnswer_answer IS NOT NULL '); 

$query69 = new Query;
$query69 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=69')
        ->andwhere('trainerAnswer_answer = 276')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query70 = new Query;
$query70 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=70')
        ->andwhere('trainerAnswer_answer = 280')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query71 = new Query;
$query71-> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=71')
        ->andwhere('trainerAnswer_answer = 284')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query72 = new Query;
$query72 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=72')
        ->andwhere('trainerAnswer_answer = 288')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query73 = new Query;
$query73 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=73')
        ->andwhere('trainerAnswer_answer = 291')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query74 = new Query;
$query74 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=74')
        ->andwhere('trainerAnswer_answer = 297')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query75 = new Query;
$query75 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=75')
        ->andwhere('trainerAnswer_answer = 299')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query76 = new Query;
$query76 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=76')
        ->andwhere('trainerAnswer_answer = 302')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query77 = new Query;
$query77 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=77')
        ->andwhere('trainerAnswer_answer = 306')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query78 = new Query;
$query78 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=78')
        ->andwhere('trainerAnswer_answer = 313')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query79 = new Query;
$query79 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=79')
        ->andwhere('trainerAnswer_answer = 316')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query80 = new Query;
$query80 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=80')
        ->andwhere('trainerAnswer_answer = 318')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query81 = new Query;
$query81 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=81')
        ->andwhere('trainerAnswer_answer = 325')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query82 = new Query;
$query82 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=82')
        ->andwhere('trainerAnswer_answer = 327')
        ->andwhere('trainerAnswer_answer IS NOT NULL '); 

$query83 = new Query;
$query83 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=83')
        ->andwhere('trainerAnswer_answer = 330')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query84 = new Query;
$query84 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=84')
        ->andwhere('trainerAnswer_answer = 335')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query85 = new Query;
$query85-> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=85')
        ->andwhere('trainerAnswer_answer = 340')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query86 = new Query;
$query86 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=86')
        ->andwhere('trainerAnswer_answer = 342')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query87 = new Query;
$query87 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=87')
        ->andwhere('trainerAnswer_answer = 348')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query88 = new Query;
$query88 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=88')
        ->andwhere('trainerAnswer_answer = 352')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query89 = new Query;
$query89 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=89')
        ->andwhere('trainerAnswer_answer = 354')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query90 = new Query;
$query90 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=90')
        ->andwhere('trainerAnswer_answer = 360')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query91 = new Query;
$query91 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=91')
        ->andwhere('trainerAnswer_answer = 362')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query92 = new Query;
$query92 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=92')
        ->andwhere('trainerAnswer_answer = 368')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query93 = new Query;
$query93 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=93')
        ->andwhere('trainerAnswer_answer = 370')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query94 = new Query;
$query94 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=94')
        ->andwhere('trainerAnswer_answer = 377')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query95 = new Query;
$query95 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=95')
        ->andwhere('trainerAnswer_answer = 379')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query96 = new Query;
$query96 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=96')
        ->andwhere('trainerAnswer_answer = 385')
        ->andwhere('trainerAnswer_answer IS NOT NULL '); 

$query97 = new Query;
$query97 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=97')
        ->andwhere('trainerAnswer_answer = 386')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query98 = new Query;
$query98 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=98')
        ->andwhere('trainerAnswer_answer = 391')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query99 = new Query;
$query99-> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=99')
        ->andwhere('trainerAnswer_answer = 396')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query100 = new Query;
$query100 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=100')
        ->andwhere('trainerAnswer_answer = 401')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query101 = new Query;
$query101 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=101')
        ->andwhere('trainerAnswer_answer = 402')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query102 = new Query;
$query102 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=102')
        ->andwhere('trainerAnswer_answer = 422')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query103 = new Query;
$query103 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=103')
        ->andwhere('trainerAnswer_answer = 410')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query104 = new Query;
$query104 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=104')
        ->andwhere('trainerAnswer_answer = 416')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query105 = new Query;
$query105 -> select(['question_id','count(trainerAnswer_answer) as total'])
        -> from('trainerAnswer')
        -> where('question_id=105')
        ->andwhere('trainerAnswer_answer = 420')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$command = $query1->union($query2)->union($query3)->union($query4)->union($query5)->union($query6)->union($query7)->union($query8)->union($query9)->union($query10)->union($query11)->union($query12)->union($query13)->union($query14)->union($query15)->union($query16)->union($query17)->union($query18)->union($query19)->union($query20)->union($query21)->union($query22)->union($query23)->union($query24)->union($query25)->union($query26)->union($query27)->union($query28)->union($query29)->union($query30)->union($query31)->union($query32)->union($query33)->union($query34)->union($query35)->union($query36)->union($query37)->union($query38)->union($query39)->union($query40)->union($query41)->union($query42)->union($query43)->union($query44)->union($query45)->union($query46)->union($query47)->union($query48)->union($query49)->union($query50)->union($query51)->union($query52)->union($query53)->union($query54)->union($query55)->union($query56)->union($query57)->union($query58)->union($query59)->union($query60)->union($query61)->union($query62)->union($query63)->union($query64)->union($query65)->union($query66)->union($query67)->union($query68)->union($query69)->union($query70)->union($query71)->union($query72)->union($query73)->union($query74)->union($query75)->union($query76)->union($query77)->union($query78)->union($query79)->union($query80)->union($query81)->union($query82)->union($query83)->union($query84)->union($query85)->union($query86)->union($query87)->union($query88)->union($query89)->union($query90)->union($query91)->union($query92)->union($query93)->union($query94)->union($query95)->union($query96)->union($query97)->union($query98)->union($query99)->union($query100)->union($query101)->union($query102)->union($query103)->union($query104)->union($query105)->createCommand();
$data= $command->queryAll();


$query1t = new Query;
$query1t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=1')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query2t = new Query;
$query2t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=2')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query3t = new Query;
$query3t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=3')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query4t = new Query;
$query4t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=4')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query5t = new Query;
$query5t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=5')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query6t = new Query;
$query6t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=6')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query7t = new Query;
$query7t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=7')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query8t = new Query;
$query8t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=8')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query9t = new Query;
$query9t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=9')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query10t = new Query;
$query10t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=10')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query11t = new Query;
$query11t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=11')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query12t = new Query;
$query12t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=12')
        ->andwhere('trainerAnswer_answer IS NOT NULL '); 

$query13t = new Query;
$query13t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=13')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query14t = new Query;
$query14t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=14')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query15t = new Query;
$query15t-> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=15')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query16t = new Query;
$query16t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=16')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query17t = new Query;
$query17t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=17')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query18t = new Query;
$query18t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=18')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query19t = new Query;
$query19t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=19')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query20t = new Query;
$query20t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=20')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query21t = new Query;
$query21t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=21')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query22t = new Query;
$query22t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=22')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query23t = new Query;
$query23t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=23')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query24t = new Query;
$query24t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=24')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query25t = new Query;
$query25t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=25')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query26t = new Query;
$query26t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=26')
        ->andwhere('trainerAnswer_answer IS NOT NULL '); 

$query27t = new Query;
$query27t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=27')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query28t = new Query;
$query28t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=28')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');     

$query29t = new Query;
$query29t-> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=29')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query30t = new Query;
$query30t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=30')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query31t = new Query;
$query31t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=31')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query32t = new Query;
$query32t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=32')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query33t = new Query;
$query33t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=33')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query34t = new Query;
$query34t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=34')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query35t = new Query;
$query35t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=35')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query36t = new Query;
$query36t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=36')
        ->andwhere('trainerAnswer_answer = 141')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query37t = new Query;
$query37t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=37')
        ->andwhere('trainerAnswer_answer = 146')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query38t = new Query;
$query38t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=38')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query39t = new Query;
$query39t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=39')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');           

$query40t = new Query;
$query40t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=40')
        ->andwhere('trainerAnswer_answer IS NOT NULL '); 

$query41t = new Query;
$query41t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=41')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query42t = new Query;
$query42t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=42')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query43t = new Query;
$query43t-> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=43')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query44t = new Query;
$query44t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=44')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query45t = new Query;
$query45t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=45')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query46t = new Query;
$query46t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=46')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query47t = new Query;
$query47t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=47')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query48t = new Query;
$query48t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=48')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query49t = new Query;
$query49t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=49')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query50t = new Query;
$query50t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=50')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query51t = new Query;
$query51t-> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=51')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query52t = new Query;
$query52t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=52')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query53t = new Query;
$query53t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=53')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query54t = new Query;
$query54t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=54')
        ->andwhere('trainerAnswer_answer IS NOT NULL '); 

$query55t = new Query;
$query55t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=55')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query56t = new Query;
$query56t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=56')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  


$query57t = new Query;
$query57t-> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=57')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query58t = new Query;
$query58t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=58')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query59t = new Query;
$query59t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=59')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query60t = new Query;
$query60t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=60')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query61t = new Query;
$query61t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=61')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query62t = new Query;
$query62t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=62')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query63t = new Query;
$query63t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=63')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query64t = new Query;
$query64t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=64')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query65t = new Query;
$query65t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=65')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query66t = new Query;
$query66t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=66')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query67t = new Query;
$query67t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=67')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query68t = new Query;
$query68t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=68')
        ->andwhere('trainerAnswer_answer IS NOT NULL '); 

$query69t = new Query;
$query69t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=69')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query70t = new Query;
$query70t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=70')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query71t = new Query;
$query71t-> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=71')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query72t = new Query;
$query72t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=72')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query73t = new Query;
$query73t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=73')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query74t = new Query;
$query74t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=74')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query75t = new Query;
$query75t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=75')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query76t = new Query;
$query76t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=76')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query77t = new Query;
$query77t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=77')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query78t = new Query;
$query78t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=78')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query79t = new Query;
$query79t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=79')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query80t = new Query;
$query80t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=80')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query81t = new Query;
$query81t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=81')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query82t = new Query;
$query82t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=82')
        ->andwhere('trainerAnswer_answer IS NOT NULL '); 

$query83t = new Query;
$query83t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=83')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query84t = new Query;
$query84t-> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=84')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query85t = new Query;
$query85t-> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=85')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query86t = new Query;
$query86t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=86')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query87t = new Query;
$query87t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=87')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query88t = new Query;
$query88t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=88')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query89t = new Query;
$query89t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=89')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query90t = new Query;
$query90t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=90')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query91t = new Query;
$query91t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=91')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query92t = new Query;
$query92t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=92')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query93t = new Query;
$query93t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=93')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query94t = new Query;
$query94t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=94')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query95t = new Query;
$query95t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=95')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query96t = new Query;
$query96t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=96')
        ->andwhere('trainerAnswer_answer IS NOT NULL '); 

$query97t = new Query;
$query97t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=97')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');  

$query98t = new Query;
$query98t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=98')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query99t = new Query;
$query99t-> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=99')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query100t = new Query;
$query100t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=100')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query101t = new Query;
$query101t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=101')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query102t = new Query;
$query102t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=102')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query103t = new Query;
$query103t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=103')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query104t = new Query;
$query104t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=104')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$query105t = new Query;
$query105t -> select(['question_id','count(trainerAnswer_answer) as totals'])
        -> from('trainerAnswer')
        -> where('question_id=105')
        ->andwhere('trainerAnswer_answer IS NOT NULL ');

$commandt = $query1t->union($query2t)->union($query3t)->union($query4t)->union($query5t)->union($query6t)->union($query7t)->union($query8t)->union($query9t)->union($query10t)->union($query11t)->union($query12t)->union($query13t)->union($query14t)->union($query15t)->union($query16t)->union($query17t)->union($query18t)->union($query19t)->union($query20t)->union($query21t)->union($query22t)->union($query23t)->union($query24t)->union($query25t)->union($query26t)->union($query27t)->union($query28t)->union($query29t)->union($query30t)->union($query31t)->union($query32t)->union($query33t)->union($query34t)->union($query35t)->union($query36t)->union($query37t)->union($query38t)->union($query39t)->union($query40t)->union($query41t)->union($query42t)->union($query43t)->union($query44t)->union($query45t)->union($query46t)->union($query47t)->union($query48t)->union($query49t)->union($query50t)->union($query51t)->union($query52t)->union($query53t)->union($query54t)->union($query55t)->union($query56t)->union($query57t)->union($query58t)->union($query59t)->union($query60t)->union($query61t)->union($query62t)->union($query63t)->union($query64t)->union($query65t)->union($query66t)->union($query67t)->union($query68t)->union($query69t)->union($query70t)->union($query71t)->union($query72t)->union($query73t)->union($query74t)->union($query75t)->union($query76t)->union($query77t)->union($query78t)->union($query79t)->union($query80t)->union($query81t)->union($query82t)->union($query83t)->union($query84t)->union($query85t)->union($query86t)->union($query87t)->union($query88t)->union($query89t)->union($query90t)->union($query91t)->union($query92t)->union($query93t)->union($query94t)->union($query95t)->union($query96t)->union($query97t)->union($query98t)->union($query99t)->union($query100t)->union($query101t)->union($query102t)->union($query103t)->union($query104t)->union($query105t)->createCommand();
$datat= $commandt->queryAll();

$numbersoalan = 1;

?>
<h1>Answer Statistics</h1>
<?= Html::a('<span class="glyphicon glyphicon-print" aria-hidden="true"> Print</span>', ['pdf'], [
            'class' => 'btn btn-success',
            'target'=>'_blank', 
            'data-toggle'=>'tooltip', 
            'title'=>'Will open the generated PDF file in a new window'
        ]); ?>

<div class="x_content" >
<table class="table table-hover table-bordered" style="width:100%">
    <thead >
        <tr>
            <th>No</th>
            <th>Questions</th>
            <th>Total Correct Answer</th>  
            <!-- <th>Total All</th>   -->                                                               
        </tr>
    </thead>
    <tbody>

<?php foreach ($data as $row): ?>
<tr>	
    <th scope="row"><?=  $numbersoalan++; ?></th>
    <td><?= $row['question_id']  ?></td>  
    <td><?= $row['total']  ?></td> 
    <!--  <td><?php foreach ($datat as $row1): ?> <?= $row1['totals']  ?><br><?php endforeach; ?></td>   -->
</tr>
<?php endforeach; ?>

</tbody>
    </table>
</div>


<h1>Total All</h1>
<table class="table table-hover table-bordered" style="width:100%">
    <thead >
        <tr>
            <th>No</th>
            <th>Questions</th>
            <th>Total Correct Answer</th>                                                                 
        </tr>
    </thead>
    <tbody>
<?php foreach ($datat as $rowt): ?>
<tr>	
   <th scope="row"><?=  $numbersoalan++; ?></th>
    <td><?= $rowt['question_id']  ?></td>  
   
     <td><?= $rowt['totals']  ?></td>  
</tr>
<?php endforeach; ?>

    </table>