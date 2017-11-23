<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbBiayaPendidikan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmb-biaya-pendidikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'deskripsi_biaya')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jumlah_biaya')->textInput() ?>

    <?= $form->field($model, 'id_usm')->textInput() ?>

    <?= $form->field($model, 'id_prodi')->textInput() ?>

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
