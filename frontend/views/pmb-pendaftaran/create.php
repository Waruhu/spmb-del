<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PmbPendaftaran */

$this->title = 'Create Pmb Pendaftaran';
$this->params['breadcrumbs'][] = ['label' => 'Pmb Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-pendaftaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
