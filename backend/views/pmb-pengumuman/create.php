<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PmbPengumuman */

$this->title = 'Create Pmb Pengumuman';
$this->params['breadcrumbs'][] = ['label' => 'Pmb Pengumumen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-pengumuman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
