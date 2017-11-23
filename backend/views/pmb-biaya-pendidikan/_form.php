<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\PmbUsm;
use backend\models\PmbProdi;
use yii\helpers\ArrayHelper;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbBiayaPendidikan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmb-biaya-pendidikan-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'id_usm')->label('Jenis USM')->dropDownList(ArrayHelper::map(PmbUsm::find()->all(), 'id_usm', 'usm'), ['prompt'=>'-Select Usm-']) ?>

    <?= $form->field($model, 'id_prodi')->label('Prodi')->dropDownList(ArrayHelper::map(PmbProdi::find()->all(), 'id_prodi', 'nama_prodi'), ['prompt'=>'-Select Prodi-']) ?>   

    <?= $form->field($model, 'deskripsi_biaya')->textInput() ?>

    <?= $form->field($model, 'jumlah_biaya')->textInput() ?>

    <?= $form->field($model, 'rincian_biaya')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', 
            'inline' => false, 
        ],
    ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
