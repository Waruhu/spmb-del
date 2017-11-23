<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbBerita */

$this->title = 'Update Pmb Berita: ' . $model->id_berita;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_berita, 'url' => ['view', 'id' => $model->id_berita]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-berita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
