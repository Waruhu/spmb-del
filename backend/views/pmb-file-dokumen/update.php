<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbFileDokumen */

$this->title = 'Update Pmb File Dokumen: ' . $model->id_dokumen;
$this->params['breadcrumbs'][] = ['label' => 'Pmb File Dokumens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dokumen, 'url' => ['view', 'id' => $model->id_dokumen]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-file-dokumen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
