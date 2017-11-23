<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbRincianBiaya */

$this->title = 'Update Pmb Rincian Biaya: ' . $model->id_rincian_biaya;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Rincian Biayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rincian_biaya, 'url' => ['view', 'id' => $model->id_rincian_biaya]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-rincian-biaya-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
