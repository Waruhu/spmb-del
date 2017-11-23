<?php

namespace backend\controllers;

use Yii;
use backend\models\PmbPengumuman;
use backend\models\PmbPengumumanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\GroupFilePengumuman;
use yii\data\ActiveDataProvider;
/**
 * PmbPengumumanController implements the CRUD actions for PmbPengumuman model.
 */
class PmbPengumumanController extends Controller
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
     * Lists all PmbPengumuman models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PmbPengumumanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PmbPengumuman model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $modelFile = new GroupFilePengumuman();
        if ($modelFile->load(Yii::$app->request->post())) {
            $modelFile->file = UploadedFile::getInstance($modelFile, 'file');
            $modelFile->file_pengumuman = 'upload/pengumuman/' . $modelFile->file->baseName . '.' . $modelFile->file->extension;
            $modelFile->id_pengumuman = $id;
            if ($modelFile->validate() && $modelFile->save()) {
                $modelFile->file->saveAs('upload/pengumuman/' . $modelFile->file->baseName . '.' . $modelFile->file->extension);
            }
            return $this->redirect(['view', 'id' => $id]);
        } else {
            $query = GroupFilePengumuman::find()->where(['id_pengumuman'=>$id]);
            $dataProvider = new ActiveDataProvider([
                'query' => $query,
            ]);
            return $this->render('view', [
                'model' => $this->findModel($id),
                'modelFile' => $modelFile,
                'dataProvider' => $dataProvider,
            ]);
        }
    }

    /**
     * Creates a new PmbPengumuman model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //     $model = new PmbPengumuman();
    //     if ($model->load(Yii::$app->request->post())) {
    //         $model->file = UploadedFile::getInstance($model, 'file');
    //         $model->file_foto = 'upload/pengumuman/' . $model->file->baseName . '.' . $model->file->extension;
    //         if ($model->validate() && $model->save()) {
    //             $model->file->saveAs('upload/pengumuman/' . $model->file->baseName . '.' . $model->file->extension);
    //         }
    //         return $this->redirect(['view', 'id' => $model->id_pengumuman]);
    //     } else {
    //         return $this->render('create', [
    //             'model' => $model,
    //         ]);
    //     }
    // }

    public function actionCreate()
    {
        $model = new PmbPengumuman();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pengumuman]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Updates an existing PmbPengumuman model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pengumuman]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PmbPengumuman model.
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
     * Finds the PmbPengumuman model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PmbPengumuman the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PmbPengumuman::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
