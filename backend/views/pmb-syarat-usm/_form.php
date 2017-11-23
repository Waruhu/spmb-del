<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\PmbUsm;
use yii\helpers\ArrayHelper;
use mihaildev\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model backend\models\PmbSyaratUsm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmb-syarat-usm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_syarat')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', 
            'inline' => false, 
        ],
    ]);?>

    <?= $form->field($model, 'id_usm')->label('Jenis USM')->dropDownList(ArrayHelper::map(PmbUsm::find()->all(), 'id_usm', 'usm'), ['prompt'=>'-Select Usm-']) ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
