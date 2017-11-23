<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbPendaftaranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmb-pendaftaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pendaftaran') ?>

    <?= $form->field($model, 'jadwal_awal') ?>

    <?= $form->field($model, 'jadwal_akhir') ?>

    <?= $form->field($model, 'biaya_daftar') ?>

    <?= $form->field($model, 'tgl_pengumuman') ?>

    <?php // echo $form->field($model, 'tgl_ujian') ?>

    <?php // echo $form->field($model, 'tgl_mendaftar_ulang') ?>

    <?php // echo $form->field($model, 'id_usm') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'active') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
