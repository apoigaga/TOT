<?php

use miloschuman\highcharts\Highcharts;
use yii\db\Query;

use yii\web\JsExpression;

?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>


<?php
         $query = new Query;
         $query -> select(['count(mark_total) as total'])
                 -> from('mark')
                 -> where('mark_total >=51 and mark_total <=60')
                 -> all();         
                         
         $command = $query->createCommand();
         $mark = $command->queryAll();

         $query1 = new Query;
         $query1 -> select(['count(mark_total) as total1'])
                 -> from('mark')
                 -> where('mark_total >=41 and mark_total <=50')
                 -> all();

          $command1 = $query1->createCommand();
         $mark1 = $command1->queryAll();


         $query2 = new Query;
         $query2 -> select(['count(mark_total) as total2'])
                 -> from('mark')
                 -> where('mark_total >=31 and mark_total <=40')
                 -> all();

          $command2 = $query2->createCommand();
         $mark2 = $command2->queryAll();


         $query3 = new Query;
         $query3 -> select(['count(mark_total) as total3'])
                 -> from('mark')
                 -> where('mark_total  <=30')
                 -> all();

          $command3 = $query3->createCommand();
         $mark3 = $command3->queryAll();

         $number =1;

?>
    <h1>Marks</h1>
    <div class="x_panel" >
        <div class="x_title" >
           
            <div class="clearfix" ></div>
        </div>
        <div class="x_content" >
            <table class="table table-hover " style="width:100%">
                <thead >
                    <tr>
                        <th>No</th>
                        <th>Competency Level</th>
                        <th>Total</th>                   
                    </tr>
                </thead>
                <tbody>

                
                    <tr>
                        <th scope="row"><?=  $number++; ?></th>
                        <td>Highly Competent</td>
                        <td> <?php foreach ($mark as $row): ?><?= $row['total'] ?><?php endforeach; ?></td>                                          
                    </tr>
                    <tr>
                        <th scope="row"><?=  $number++; ?></th>
                        <td>Competent</td>
                        <td> <?php foreach ($mark1 as $row): ?><?= $row['total1'] ?><?php endforeach; ?></td>                                          
                    </tr>
                    <tr>
                        <th scope="row"><?=  $number++; ?></th>
                        <td>Moderate</td>
                        <td> <?php foreach ($mark2 as $row): ?><?= $row['total2'] ?><?php endforeach; ?></td>                                          
                    </tr>
                    <tr>
                        <th scope="row"><?=  $number++; ?></th>
                        <td>Fail</td>
                        <td> <?php foreach ($mark3 as $row): ?><?= $row['total3'] ?><?php endforeach; ?></td>                                          
                    </tr>
                    
                    
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php

// echo Highcharts::widget([
//    'options' => [
//       'title' => ['text' => 'Competency Level'],
//       'xAxis' => [
//          'categories' => ['Fail', 'Moderate', 'Competent','Highly Compotent']
//       ],
//       'yAxis' => [
//          'title' => ['text' => 'Bilangan']
//       ],
//       'series' => [
//          ['name' => 'Competency Level', 
//          'data' => $mark     
//          ] 
//       ] 
//    ]
// ]);


?>


<?php
      

            // $query = new Query;
            // $query -> select(['mark_total'])
            //         -> from('mark')
            //         -> where('mark_total >=51 and mark_total <=60')
            //         -> all();
            // $command = $query->createCommand();
            // $mark = $command->queryAll();





?>


                <?php
                
                    echo Highcharts::widget([
                        'options' => [
                            'chart'=>[
                                'type'=>'column',

                            ],
                            'exporting'=>[
                                'enabled'=>false,
                            ],
                            'credits'=>[
                                'enabled'=>false,
                            ],
                            'title'=>[
                                'text'=>'Monthly Average Admission'
                            ],
                            'subtitle'=>[
                                'text'=>'',
                                'margin'=>0,
                            ],
                            'xAxis'=>[
                                'categories'=> ['Jan', 'Feb', 'Mar', 'Apr']
                            ],
                            'yAxis'=>[
                                'title'=>[
                                    'text'=>'Admission Count',
                                ]
                            ],
                            'plotOptions'=>[
                                'column'=>[
                                    'pointPadding'=>0.2,
                                    'borderWidth'=>0
                                ],
                            ],                            
                            'series'=> [[
                                    'name'=> 'Tokyo',
                                    'data'=> [3, 2, 1, 3, 4]
                                ], [
                                    'name'=> 'New York',
                                    'data'=> [3, 2, 1, 3, 4]
                                ], [
                                    'name'=> 'Berlin',
                                    'data'=> [3, 2, 1, 3, 4]
                                ], [
                                    'name'=> 'London',
                                    'data'=> [3, 2, 1, 3, 4]
                                ]]
                        ],
                    ]);
                // } else {
                //     echo '<div class="alert alert-danger">No results found.</div>';
                // }
                ?>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<?php 

echo Highcharts::widget([
                        'options' => [
                            'chart'=>[
                                'type'=>'column',

                            ],
                            'exporting'=>[
                                'enabled'=>false,
                            ],
                            'credits'=>[
                                'enabled'=>false,
                            ],
                            'title'=>[
                                'text'=>'Monthly Average Admission'
        ],
        'xAxis'=> [
            'categories'=> ['Highly Competent', 'Competent', 'Moderate', 'Fail']
        ],
        'labels'=> [
            'items'=> [[
                'html'=> 'Total fruit consumption',
                'style'=> [
                    'left'=> '50px',
                    'top'=> '18px',
                    //'color'=> (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                ]
            ]]
        ],
        'series'=> [[
            'type'=> 'column',
            'name'=> 'Highly Competent',
            'data'=> []
        ], [
            'type'=> 'column',
            'name'=> 'Competent',
            'data'=> []
        ], [
            'type'=> 'column',
            'name'=> 'Moderate',
            'data'=> []
         ], [
            'type'=> 'column',
            'name'=> 'Fail',
            'data'=> []
        ], [
            'type'=> 'spline',
            'name'=> 'Average',
            'data'=> [3,21,17,2],
            'marker'=> [
                'lineWidth'=> 2,
                //'lineColor'=> Highcharts.getOptions().colors[3],
                'fillColor'=> 'white'
            
            ]
        ]]
    ]
]);
?>
<!-- 
$fYearWiseAdm = [];
//Year wise admission count
$stuYearAdm = (new \yii\db\Query())
   ->select(["CONCAT(DATE_FORMAT(si.stu_admission_date, '%Y'), ' (', COUNT(sm.stu_master_id), ')') AS 'yearDisp'", 'DATE_FORMAT(si.stu_admission_date, "%Y") as "year"'])
   ->from('stu_master sm')
   ->join('JOIN', 'stu_info si', 'si.stu_info_stu_master_id = sm.stu_master_id')
   ->where(['sm.is_status' => '0'])
   ->groupBy(['DATE_FORMAT(si.stu_admission_date, "%Y")'])
   ->orderBy('YEAR(si.stu_admission_date) DESC')
   ->limit('3')
   ->all(); -->
<?php
              
     echo Highcharts::widget([
         'options' => [
             'chart'=>[
                 'type'=>'spline',

             ],
             'exporting'=>[
                 'enabled'=>false,
             ],
             'credits'=>[
                 'enabled'=>false,
             ],
             'title'=>[
                 'text'=>'Monthly Average Admission'
             ],
             'subtitle'=>[
                 'text'=>'',
                 'margin'=>0,
             ],
             'xAxis'=>[
                 'categories'=> ['Jan','Sep', 'Oct', 'Nov']
             ],
             'yAxis'=>[
                 'title'=>[
                     'text'=>'Admission Count',
                 ]
             ],
             'plotOptions'=>[
                 'column'=>[
                     'pointPadding'=>0.2,
                     'borderWidth'=>0
                 ],
             ],
             'series'=> [[
                     'type'=> 'spline',
                     'name'=> 'highly competent',
                     'data'=> $mark
                 ], [
                     'type'=> 'spline',
                     'name'=> 'competent',
                     'data'=> $mark1
                 ], [
                     'type'=> 'spline',
                     'name'=> 'moderate',
                     'data'=> $mark2
                 ], [
                     'type'=> 'spline',
                     'name'=> 'fail',
                     'data'=> $mark3
                 ]]
         ],
     ]);

 ?>
