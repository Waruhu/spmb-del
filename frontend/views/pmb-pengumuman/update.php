<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbPengumuman */

$this->title = 'Update Pmb Pengumuman: ' . $model->id_pengumuman;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Pengumumen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pengumuman, 'url' => ['view', 'id' => $model->id_pengumuman]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-pengumuman-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
