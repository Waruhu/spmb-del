<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\PmbBiayaPendidikan;
use mihaildev\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model backend\models\PmbRincianBiaya */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmb-rincian-biaya-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_biaya_pendidikan')->label('Jenis Biaya')->dropDownList(ArrayHelper::map(PmbBiayaPendidikan::find()->all(), 'id_biaya_pendidikan', 'deskripsi_biaya'), ['prompt'=>'-Select Jenis Biaya-']) ?>

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
