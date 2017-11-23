<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbBerita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmb-berita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul_berita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_singkat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'deskripsi_all')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'file_foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
