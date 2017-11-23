<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PmbInfoDel */

$this->title = 'Create Pmb Info Del';
$this->params['breadcrumbs'][] = ['label' => 'Pmb Info Dels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-info-del-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
