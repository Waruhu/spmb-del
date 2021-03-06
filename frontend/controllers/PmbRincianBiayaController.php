<?php

namespace frontend\controllers;

use Yii;
use frontend\models\PmbRincianBiaya;
use frontend\models\PmbRincianBiayaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\PmbBiayaPendidikan;
use yii\data\ActiveDataProvider;

/**
 * PmbRincianBiayaController implements the CRUD actions for PmbRincianBiaya model.
 */
class PmbRincianBiayaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionBiaya($id){
        $modelBiaya = PmbBiayaPendidikan::find()->where(['id_usm'=>$id]);
        $dataProvider = new ActiveDataProvider([
            'query' => $modelBiaya,
        ]);

        return $this->render('index',[
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all PmbRincianBiaya models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PmbRincianBiayaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PmbRincianBiaya model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = PmbRincianBiaya::find()->where(['id_biaya_pendidikan'=>$id])->one();
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new PmbRincianBiaya model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PmbRincianBiaya();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_rincian_biaya]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PmbRincianBiaya model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_rincian_biaya]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PmbRincianBiaya model.
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
     * Finds the PmbRincianBiaya model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PmbRincianBiaya the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PmbRincianBiaya::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
