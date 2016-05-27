<?php 

namespace backend\controllers;

use Yii;
use backend\models\Question;
use backend\models\QuestionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
use yii\helpers\Html;
use backend\models\Answer;
use backend\models\trainerAnswer;
use yii\helpers\ArrayHelper;
use backend\models\Mark;






/**
 * QuestionController implements the CRUD actions for Question model.
 */
class QuestionController extends Controller
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
        $trainer_id = Yii::$app->user->identity->id; 

        $query = new Query;
        $query -> select(['count(question_id) as tot'])
               -> from('question')
               -> all();
        $command = $query->createCommand();
        $totquestion = $command->queryAll();
        $num = $totquestion[0]['tot'];

        $querytot = new Query;
        $querytot -> select(['count(trainerAnswer_answer) as totAnswer'])
                  -> from('trainerAnswer')
                  -> where('trainer_id = "'.$trainer_id.'" ')
                  -> all();
        $commandtot = $querytot->createCommand();
        $answer_tot = $commandtot->queryAll();
        $answertot = $answer_tot[0]['totAnswer'];

        if( $exists = Mark::find()->where(['trainer_id' => $trainer_id])->exists()){

            $back = Yii::$app->request->referrer;
               echo "<script>
               confirm('You Had answered all questions')
               window.location.href='$back';
               </script>";


        }
        else{
            
            $queryA = new Query;
            $queryA  ->select(['question.question_id AS id','question.question AS soalan','question.code AS qcode'])  
                     ->from('question')
                     ->where('section = "A"')
                     ->orderBy('rand()')
                     ->limit(35);

            $queryB = new Query;
            $queryB  ->select(['question.question_id AS id','question.question AS soalan','question.code AS qcode'])  
                     ->from('question')
                     ->where('section = "B"')
                     ->orderBy('rand()')
                     ->limit(7);

            $queryC = new Query;
            $queryC  ->select(['question.question_id AS id','question.question AS soalan','question.code AS qcode'])  
                     ->from('question')
                     ->where('section = "C"')
                     ->orderBy('rand()')
                     ->limit(18);
            
            $commandR = $queryA->union($queryB)->union($queryC)->createCommand();
            $data = $commandR->queryAll();

            $items = ArrayHelper::map(Answer::find()->all(),'answer_id','answer');
            $numbersoalan=1;
            return $this->render('soalan', [
                'soalan' => $data,
                'items' => $items,
                'numbersoalan' => $numbersoalan,
            ]);   
        }    

  
    }


    public function actionSoalanSeterusnya()
    {

     if(isset($_POST['question_id']) && isset($_POST['trainerAnswer']))
     {
        
        //*****************************view all questions*******************//
        if ($_POST['question_id']!=0) {

            $trainer_id = Yii::$app->user->identity->id;

            $query1 = new Query;
            $query1 -> select(['registered_question as regQ'])
                   -> from('trainerAnswer')
                   -> where('trainer_id = "'.$trainer_id.'"')
                   -> all();
            $command1 = $query1->createCommand();
            $totquestion1= $command1->queryAll();

            
        //****************kalau user dah jawab semua soalan*********************//
            if(!empty($totquestion1)){

                foreach ($_POST['question_id'] as $key => $value) {
                    $question =$_POST['question_id'][$key];
                    $answer = $_POST['trainerAnswer'][$key];
                    $connection= Yii::$app->db;
                    $connection->createCommand("UPDATE
                                        trainerAnswer 
                                        SET 
                                        trainerAnswer_answer = '".$answer."' 
                                        WHERE  question_id = '".$question."'
                                        AND    trainer_id = '".$trainer_id."'
                                        ")->execute();
                }
                

            }elseif(empty($totquestion1)){

                $query = new Query;
                $query -> select(['count(question_id) as tot'])
                       -> from('question')
                       -> all();
                $command = $query->createCommand();
                $totquestion = $command->queryAll();
                $num = $totquestion[0]['tot'];

                for($i=1; $i <= $num; $i++){
                    $connection= Yii::$app->db;
                    $connection->createCommand("INSERT INTO 
                                                trainerAnswer (registered_question, question_id, trainer_id)

                                                VALUES 
                                                (:registered_question, :question_id, :trainer_id)",[
                                                ":registered_question" => $i,
                                                ":question_id" => $i,
                                                ":trainer_id" => $trainer_id,
                                                ]




                                              )->execute();

                }
                foreach ($_POST['question_id'] as $key => $value) {
                    $question =$_POST['question_id'][$key];
                    $answer = $_POST['trainerAnswer'][$key];
                    $connection= Yii::$app->db;
                    $connection->createCommand("UPDATE
                                        trainerAnswer 
                                        SET 
                                        trainerAnswer_answer = '".$answer."'
                                        WHERE  question_id = '".$question."'
                                        AND    trainer_id = '".$trainer_id."'
                                        ")->execute();
                }
            }
            // $query = new Query;
            // //****************please change total number of question at limit()***************
            // $query  ->select(['q.question_id AS id','q.question AS soalan','q.code AS qcode'])  
            //         ->from('trainerAnswer t, question q')
            //         ->where('t.registered_question = q.question_id and t.trainerAnswer_answer is null')
            //         ->orderBy('section, rand()')
            //         ->limit(5);   
            //********************************************************************************        
            // $command = $query->createCommand();
            // $data = $command->queryAll(); 
            $items = ArrayHelper::map(Answer::find()->all(),'answer_id','answer');


            $queryjawa = new Query;
            $queryjawa -> select(['count(trainerAnswer_answer) as totjaw'])
                    -> from('trainerAnswer')
                    -> where('trainer_id = "'.$trainer_id.'"')
                    -> all();
            $commandjawa = $queryjawa->createCommand();
            $totjawapan = $commandjawa->queryAll();
            $total_jawapan = $totjawapan[0]['totjaw'];

                return $this->render('mark', [
                    // 'soalan' => $data,

                    'items' => $items,
                    'numbersoalan' => $total_jawapan,
                        
                ]);   
        }
  
    }
    $back = Yii::$app->request->referrer;
       echo "<script>
       confirm('Please answer all questions')
       window.location.href='$back';
       </script>";
    
}

public function actionBack()
{

          $trainer_id = Yii::$app->user->identity->id;

          $connection= Yii::$app->db;
          $connection->createCommand("DELETE FROM trainerAnswer
                                      WHERE trainer_id = '".$trainer_id."'

                                      ")->execute();

          $connection1= Yii::$app->db;
          $connection1->createCommand("DELETE FROM mark
                                      WHERE trainer_id = '".$trainer_id."'

                                      ")->execute();



            $queryA = new Query;
            $queryA  ->select(['question.question_id AS id','question.question AS soalan','question.code AS qcode'])  
                     ->from('question')
                     ->where('section = "A"')
                     ->orderBy('rand()')
                     ->limit(35);

            $queryB = new Query;
            $queryB  ->select(['question.question_id AS id','question.question AS soalan','question.code AS qcode'])  
                     ->from('question')
                     ->where('section = "B"')
                     ->orderBy('rand()')
                     ->limit(7);

            $queryC = new Query;
            $queryC  ->select(['question.question_id AS id','question.question AS soalan','question.code AS qcode'])  
                     ->from('question')
                     ->where('section = "C"')
                     ->orderBy('rand()')
                     ->limit(18);
            
            $commandR = $queryA->union($queryB)->union($queryC)->createCommand();
            $data = $commandR->queryAll();

            $items = ArrayHelper::map(Answer::find()->all(),'answer_id','answer');
            $numbersoalan=1;
            return $this->render('soalan', [
                'soalan' => $data,
                'items' => $items,
                'numbersoalan' => $numbersoalan,
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

        if ($model->load(Yii::$app->request->post())) {
            

            $model->save();
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


    public function actionMark()
    {
        return $this->render('mark');
    }
}
