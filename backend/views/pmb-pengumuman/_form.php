<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use vova07\imperavi\Widget;
use mihaildev\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model backend\models\PmbPengumuman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmb-pengumuman-form">

    <?php $form = ActiveForm::begin([ 'enableClientValidation' => true,'options' => ['enctype'=>'multipart/form-data']]);?>

    <?= $form->field($model, 'judul_pengumuman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_pengumuman')->widget(CKEditor::className(),[
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
