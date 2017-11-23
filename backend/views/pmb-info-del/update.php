<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbInfoDel */

$this->title = 'Update Pmb Info Del: ' . $model->id_info_del;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Info Dels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_info_del, 'url' => ['view', 'id' => $model->id_info_del]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-info-del-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
