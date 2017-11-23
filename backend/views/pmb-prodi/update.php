<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbProdi */

$this->title = 'Update Pmb Prodi: ' . $model->id_prodi;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_prodi, 'url' => ['view', 'id' => $model->id_prodi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-prodi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
