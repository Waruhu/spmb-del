<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbPendaftaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmb-pendaftaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jadwal_awal')->textInput() ?>

    <?= $form->field($model, 'jadwal_akhir')->textInput() ?>

    <?= $form->field($model, 'biaya_daftar')->textInput() ?>

    <?= $form->field($model, 'tgl_pengumuman')->textInput() ?>

    <?= $form->field($model, 'tgl_ujian')->textInput() ?>

    <?= $form->field($model, 'tgl_mendaftar_ulang_awal')->textInput() ?>

    <?= $form->field($model, 'tgl_mendaftar_ulang_akhir')->textInput() ?>

    <?= $form->field($model, 'id_usm')->textInput() ?>

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
