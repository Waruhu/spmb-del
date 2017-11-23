<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PmbMasukTahun */

$this->title = 'Create Pmb Masuk Tahun';
$this->params['breadcrumbs'][] = ['label' => 'Pmb Masuk Tahuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-masuk-tahun-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
