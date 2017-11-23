<?php

namespace backend\controllers;

use Yii;
use backend\models\PmbBiayaPendidikan;
use backend\models\PmbBiayaPendidikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\PmbRincianBiaya;

/**
 * PmbBiayaPendidikanController implements the CRUD actions for PmbBiayaPendidikan model.
 */
class PmbBiayaPendidikanController extends Controller
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

    /**
     * Lists all PmbBiayaPendidikan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PmbBiayaPendidikanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PmbBiayaPendidikan model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $modelRincianBiaya = PmbRincianBiaya::find()->where(['id_biaya_pendidikan'=>$id])->one();
        // var_dump(count($modelRincianBiaya));
        // die();
        return $this->render('view', [
            'model' => $model,
            'modelRincianBiaya' => $modelRincianBiaya,
        ]);
    }

    /**
     * Creates a new PmbBiayaPendidikan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PmbBiayaPendidikan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $modelRincianBiaya = new PmbRincianBiaya();
            $modelRincianBiaya->id_biaya_pendidikan = $model->id_biaya_pendidikan;
            $modelRincianBiaya->rincian_biaya = $model->rincian_biaya;
            $modelRincianBiaya->save();
            return $this->redirect(['view', 'id' => $model->id_biaya_pendidikan]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PmbBiayaPendidikan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_biaya_pendidikan]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PmbBiayaPendidikan model.
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
     * Finds the PmbBiayaPendidikan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PmbBiayaPendidikan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PmbBiayaPendidikan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
