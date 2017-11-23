<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbMasukTahun */

$this->title = 'Update Pmb Masuk Tahun: ' . $model->id_tahun;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Masuk Tahuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tahun, 'url' => ['view', 'id' => $model->id_tahun]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-masuk-tahun-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
