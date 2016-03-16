<?php

namespace backend\controllers;

use Yii;
use backend\models\Question;
use backend\models\QuestionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;



/**
 * QuestionController implements the CRUD actions for Question model.
 */
class QuestionController extends Controller
{


     public function radioList ($items, $options = [])
                {
                    $this->adjustLabelFor($Options);
                    $this->parts['{input}'] = Html::activeRadioList($this->model,$this->attribute,$items,$options);

                    

                    return $this->render('soalan', [
            'soalan' => $data,
            
        ]);


                }
       



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
     * Lists all Question models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new QuestionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Question model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

     public function actionSoalan()
    {
        $query = new Query;
        $query  ->select(['question.question_id AS id','question.question AS soalan'])  
                ->from('question')
                ;
           
        $command = $query->createCommand();
        $data = $command->queryAll();
        
        // $singleSQL = new Query;
        // $singleSQL ->select (['question.question_id','question.question AS qs', 'answer.answer AS ans'])
        //            ->from('question', 'answer')
        //            ->innerJoin('answer', 'answer.question_id = question.question_id')
        //            ->where('answer.question_id = question.question_id')
        //            ->all();

        // $command1 = $singleSQL->createCommand();
        // $data1 = $command1->queryAll();


                                    

        // while($row = mysql_fetch_array($singleSQL))
        // {
        //     $id = $row['question_id'];
        //     $thisQuestion = $row['question'];
        //     $q = '<h2>'.$thisQuestion.'</h2>';
            
        //     $sql2 = mysql_query("SELECT * FROM answer WHERE question_id = '$question' ");
        //     while ($row2 = mysql_fetch_array($sql2)) 
        //     {   
        //         $answer = $row2['answer'];
        //         $correct = $row2['correct'];
        //         $answers .= '<label style="cursor:pointer;"><input type="radio" name="rads" value="'.$correct.'">'.$answer.'</label>
        //         <input type="hidden" id="gid" value="'.$id.'" name="gid"><br /><br />';
                
        //     }
        //     $output = ''.$q.','.$answers.',<span id="btnSpan"><button onclick="">Submit</button></span>';
        // }

        return $this->render('soalan', [
            'soalan' => $data,
            
        ]);


           
        
    }



    /**
     * Creates a new Question model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Question();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->question_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Question model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->question_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Question model.
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
     * Finds the Question model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Question the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Question::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
