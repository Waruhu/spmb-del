<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PmbFoto */

$this->title = 'Create Pmb Foto';
$this->params['breadcrumbs'][] = ['label' => 'Pmb Fotos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-foto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
