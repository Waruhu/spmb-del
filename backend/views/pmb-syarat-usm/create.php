<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PmbSyaratUsm */

$this->title = 'Tambah Syarat USM';
$this->params['breadcrumbs'][] = ['label' => 'Pmb Syarat Usms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-syarat-usm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
