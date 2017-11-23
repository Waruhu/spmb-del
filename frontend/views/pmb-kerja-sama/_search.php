<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbKerjaSamaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmb-kerja-sama-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kerja_sama') ?>

    <?= $form->field($model, 'nama_client') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?= $form->field($model, 'logo') ?>

    <?= $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'udpated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'active') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
