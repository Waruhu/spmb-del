<?php

namespace backend\controllers;

use Yii;
use backend\models\PmbBerita;
use backend\models\PmbBeritaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PmbBeritaController implements the CRUD actions for PmbBerita model.
 */
class PmbBeritaController extends Controller
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
     * Lists all PmbBerita models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PmbBeritaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PmbBerita model.
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
     * Creates a new PmbBerita model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PmbBerita();

        if ($model->load(Yii::$app->request->post())) {
            /*$model->file = UploadedFile::getInstance($model, 'file');
            $model->file_foto = 'upload/berita/' . $model->file->baseName . '.' . $model->file->extension;
            if ($model->validate() && $model->save()) {
                $model->file->saveAs('upload/berita/' . $model->file->baseName . '.' . $model->file->extension);
            }*/

            $image = UploadedFile::getInstance($model, 'file');
            if (!is_null($image)) {
                
                $tmp = explode('.', $image->name);
                $ext = end($tmp);
                // generate a unique file name to prevent duplicate filenames
                $model->file_foto = Yii::$app->security->generateRandomString().".{$ext}";
                // the path to save file, you can set an uploadPath
                // in Yii::$app->params (as used in example below)
                Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/upload/berita/';
                $path = Yii::$app->params['uploadPath'] . $model->file_foto;

                $image->saveAs($path);
            }
            

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id_berita]);
            }  else {
                var_dump ($model->getErrors()); die();
            }
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PmbBerita model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_berita]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PmbBerita model.
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
     * Finds the PmbBerita model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PmbBerita the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PmbBerita::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
