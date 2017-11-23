<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\PmbUsm;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbPendaftaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmb-pendaftaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_usm')->label('Jenis USM')->dropDownList(ArrayHelper::map(PmbUsm::find()->all(), 'id_usm', 'usm'), ['prompt'=>'-Select Usm-']) ?>
    
    <?=$form->field($model, 'jadwal_awal')->widget(DatePicker::classname(), [
        'options' => [
            'placeholder' => 'Jadwal Awal...',
            //'value' => '0000-00-00',
            ],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?=$form->field($model, 'jadwal_akhir')->widget(DatePicker::classname(), [
        'options' => [
            'placeholder' => 'jadwal_akhir...',
            //'value' => '0000-00-00',
            ],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?=$form->field($model, 'tgl_pengumuman')->widget(DatePicker::classname(), [
        'options' => [
            'placeholder' => 'Tangga; Pengumuman...',
            //'value' => '0000-00-00',
            ],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>
    
    <?=$form->field($model, 'tgl_ujian')->widget(DatePicker::classname(), [
        'options' => [
            'placeholder' => 'Tanggal ujian...',
            //'value' => '0000-00-00',
            ],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?=$form->field($model, 'tgl_mendaftar_ulang')->widget(DatePicker::classname(), [
        'options' => [
            'placeholder' => 'Tanggal Mendaftar Ulang...',
            //'value' => '0000-00-00',
            ],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>
    
    <?= $form->field($model, 'biaya_daftar')->textInput() ?>

    
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
