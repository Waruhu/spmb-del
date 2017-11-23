<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbPendaftaran */

$this->title = 'Update Pmb Pendaftaran: ' . $model->id_pendaftaran;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pendaftaran, 'url' => ['view', 'id' => $model->id_pendaftaran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-pendaftaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
