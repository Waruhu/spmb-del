<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbTanyaJawab */

$this->title = 'Update Pmb Tanya Jawab: ' . $model->id_tanya_jawab;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Tanya Jawabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tanya_jawab, 'url' => ['view', 'id' => $model->id_tanya_jawab]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-tanya-jawab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
