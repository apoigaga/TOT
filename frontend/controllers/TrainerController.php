<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Trainer;
use frontend\models\TrainerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * TrainerController implements the CRUD actions for Trainer model.
 */
class TrainerController extends Controller
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
     * Lists all Trainer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TrainerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Trainer model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);

        // $model = Trainer::findOne($id);
        // if ($model === null) {
        //     throw new NotFoundHttpException;
        // }

        // return $this->render('view', [
        //     'model' => $model,
        // ]);
    }

    /**
     * Creates a new Trainer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Trainer();

        if ($model->load(Yii::$app->request->post())) {
            if(Trainer::find() 
                    ->where(['trainer_icNO'=> $model->trainer_icNO])
                    ->exists() ){

                Yii::$app->session->setFlash('danger', "You already registered.");
            
                return $this->redirect(Yii::$app->request->referrer);

            }else{
            $model->save();}
            return $this->redirect(['view', 'id' => $model->trainer_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Trainer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->trainer_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Trainer model.
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
     * Finds the Trainer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Trainer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Trainer::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
