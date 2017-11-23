<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbKerjaSama */

$this->title = 'Update Pmb Kerja Sama: ' . $model->id_kerja_sama;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Kerja Samas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kerja_sama, 'url' => ['view', 'id' => $model->id_kerja_sama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-kerja-sama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
