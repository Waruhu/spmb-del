<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbPengumuman */

$this->title = $model->judul_pengumuman;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Pengumumen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-pengumuman-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pengumuman], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pengumuman], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <!--?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id_pengumuman',
            'judul_pengumuman',
            'deskripsi_pengumuman:ntext',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',
        ],
    ]) ?-->
    <H3><?=$model->judul_pengumuman?></H3>
    <?=$model->deskripsi_pengumuman?>
    

    <br>
    <p>File Pengumuman</p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_pengumuman',
            'file_pengumuman',
            // 'deskripsi_pengumuman:ntext',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <br>
    <h3>Tambahkan File Pengumuman</h3>

    <?php $form = ActiveForm::begin([ 'enableClientValidation' => true,'options' => ['enctype'=>'multipart/form-data']]);?>
    <?= $form->field($modelFile, 'file')->widget(FileInput::classname(), [
        'options' => ['accept' => 'file/*',],
        'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png', 'pdf', 'docx', 'doc', 'xmls']],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($modelFile->isNewRecord ? 'Upload' : 'Update', ['class' => $modelFile->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


    
</div>
