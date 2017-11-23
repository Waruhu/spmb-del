<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PmbBiayaPendidikan */

$this->title = 'Create Pmb Biaya Pendidikan';
$this->params['breadcrumbs'][] = ['label' => 'Pmb Biaya Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-biaya-pendidikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
