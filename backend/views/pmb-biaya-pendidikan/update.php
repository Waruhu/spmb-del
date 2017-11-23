<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbBiayaPendidikan */

$this->title = 'Update Pmb Biaya Pendidikan: ' . $model->id_biaya_pendidikan;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Biaya Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_biaya_pendidikan, 'url' => ['view', 'id' => $model->id_biaya_pendidikan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-biaya-pendidikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
