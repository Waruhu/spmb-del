<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbGalery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmb-galery-form">

<?php $form = ActiveForm::begin([ 'enableClientValidation' => true,'options' => ['enctype'=>'multipart/form-data']]);?>

    <?= $form->field($model, 'file')->widget(FileInput::classname(), [
        'options' => ['accept' => 'file/*'],
        'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png', 'pdf', 'docx', 'doc', 'xmls']],
    ]) ?>
    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
