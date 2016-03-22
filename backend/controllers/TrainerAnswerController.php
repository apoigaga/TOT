<?php

namespace backend\controllers;

use Yii;
use backend\models\TrainerAnswer;
use backend\models\TrainerAnswerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
use yii\db\Command;
use yii\helpers\ArrayHelper;
use backend\models\Answer;

/**
 * TrainerAnswerController implements the CRUD actions for TrainerAnswer model.
 */
class TrainerAnswerController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all TrainerAnswer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TrainerAnswerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TrainerAnswer model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TrainerAnswer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TrainerAnswer();

        if ($model->load(Yii::$app->request->post())) {

            echo $model->jawapanq1;

            // return $this->redirect(['view', 'id' => $model->trainerAnswer_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }


    public function actionSoalanSeterusnya()
    {
        
         
        if ($_POST['question_id']!=0) {

            $trainer_id = Yii::$app->user->identity->id;
            // $question_id = $_POST['question_id'];
            
                
            
                // foreach ($_POST['question_id'] as $question => $q) {

                //     echo "<br/>".$trainer_id."<br/>".$q."<br/><br/>";

                //     foreach ($_POST['trainerAnswer'] as $key => $value) {
                //         echo ""
                //         # code...
                //     }
                foreach ($_POST['question_id'] as $key => $value) {
                    $question =$_POST['question_id'][$key];
                    $answer = $_POST['trainerAnswer'][$key];
                    $connection= Yii::$app->db;
                    $connection->createCommand("INSERT INTO 
                                        trainerAnswer (trainer_id,trainerAnswer_answer,question_id) 
                                        VALUES 
                                        (:trainer_id,:trainerAnswer_answer,:question_id)",[
                                        ":trainer_id" => $trainer_id,
                                        ":trainerAnswer_answer" => $answer,
                                        ":question_id" => $question, ])->execute();

                    // $trainer_answer = new TrainerAnswer();
                    // $trainer_answer->trainerAnswer_answer = $answer;
                    // $trainer_answer->question_id = $question;
                    // $trainer_answer->trainer_id = $trainer_id;
                    // $trainer_answer->save();

                    //echo "Answer by:$trainer_id<br/>Q: $question<br/> A: $answer<br/><br/>";
                    # code...
                }

                     
            
           

            // return $this->redirect(['view', 'id' => $model->trainerAnswer_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }

        

  
    }

    /**
     * Updates an existing TrainerAnswer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->trainerAnswer_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TrainerAnswer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TrainerAnswer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TrainerAnswer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TrainerAnswer::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
