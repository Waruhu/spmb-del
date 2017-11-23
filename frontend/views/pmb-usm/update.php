<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbUsm */

$this->title = 'Update Pmb Usm: ' . $model->id_usm;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Usms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_usm, 'url' => ['view', 'id' => $model->id_usm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-usm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
