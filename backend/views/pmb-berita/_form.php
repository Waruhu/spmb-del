<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use kartik\file\FileInput;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbBerita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmb-berita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul_berita')->textInput(['maxlength' => true]) ?>

    


    <?= $form->field($model, 'deskripsi_singkat')->widget(CKEditor::className(), [
                        'options' => ['rows' => 12],
                        'preset' => 'advanced'
                    ]) ?>

    <?= $form->field($model, 'deskripsi_all')->widget(CKEditor::className(), [
                        'options' => ['rows' => 12],
                        'preset' => 'advanced'
                    ]) ?>

    
    <?= $form->field($model, 'file')->widget(FileInput::classname(), [
        'options' => ['accept' => 'file/*'],
        'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png', 'pdf', 'docx', 'doc', 'xmls']],
    ]) ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
