<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create'],
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        // return $this->render('index');
        // $question = Question::find()->all();

        if (\Yii::$app->user->isGuest){
            return $this->redirect(['site/login']);
        }
        else {
            $role = Yii::$app->user->identity->role;
            
            switch($role){
                case '1' :
                    return $this->render('index');// view for super user
                break;
                case '0':
                return $this->redirect('/TOT/frontend/web/index.php');
                break;
                
            }
        }

       // return $this->render('question1',['question'=>$question]);

        
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionQuestion1()
    {
        return $this->render('question1');
    }

    public function actionQuiz()
    {
        return $this->render('quiz');
        // return $this->render('quiz',array('question'=>$question));
    }
    public function actionUserAnswer()
    {
        return $this->render('userAnswer');
    }


}
