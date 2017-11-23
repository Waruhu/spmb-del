<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbRincianBiaya */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmb-rincian-biaya-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_biaya_pendidikan')->textInput() ?>

    <?= $form->field($model, 'id_usm')->textInput() ?>

    <?= $form->field($model, 'rincian_biaya')->textarea(['rows' => 6]) ?>

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
