<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbSyaratUsm */

$this->title = 'Update Pmb Syarat Usm: ' . $model->id_syarat_usm;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Syarat Usms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_syarat_usm, 'url' => ['view', 'id' => $model->id_syarat_usm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-syarat-usm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
