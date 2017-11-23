<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PmbKerjaSama */

$this->title = 'Create Pmb Kerja Sama';
$this->params['breadcrumbs'][] = ['label' => 'Pmb Kerja Samas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-kerja-sama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
