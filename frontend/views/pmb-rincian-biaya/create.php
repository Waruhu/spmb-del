<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PmbRincianBiaya */

$this->title = 'Create Pmb Rincian Biaya';
$this->params['breadcrumbs'][] = ['label' => 'Pmb Rincian Biayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-rincian-biaya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
