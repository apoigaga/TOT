<?php
use yii\helpers\Html;
?>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">       
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel" >
                <div class="question-index">
                    <h1>WELCOME TO ADMIN PANEL</h1>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12" >
                                <div class="x_panel" >
                                    <div class="x_title" >
                                        <h2>ADMIN</h2>
                                        <div class="clearfix" ></div>
                                    </div>
                                    <div class="x_content" >
                                        <table class="table table-hover" >
                                            <thead >
                                                <tr>
                                                    <th>#</th>
                                                    <th>ACTION</th>
                                                    <th></th>
                                                    <th>EDIT</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Question</td>
                                                    <td></td>
                                                    <td><?= Html::a('VIEW', ['/question/index'], ['class'=>'btn btn-info btn-xs']) ?>
                                                    	<?= Html::a('CREATE', ['/question/create'], ['class'=>'btn btn-primary btn-xs']) ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Answer</td>
                                                    <td></td>
                                                    <td><?= Html::a('VIEW', ['/answer/index'], ['class'=>'btn btn-info btn-xs']) ?>
                                                    <?= Html::a('CREATE', ['/answer/create'], ['class'=>'btn btn-primary btn-xs']) ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Marks</td>
                                                    <td></td>
                                                    <td><?= Html::a('VIEW', ['/mark/index'], ['class'=>'btn btn-info btn-xs']) ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><br><br><br><br><br><br><br><br><br>
                    </div>
            </div>
            </div>
        </div>
    </div>               
</body>