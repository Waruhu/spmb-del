<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PmbTanyaJawab */

$this->title = 'Create Pmb Tanya Jawab';
$this->params['breadcrumbs'][] = ['label' => 'Pmb Tanya Jawabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-tanya-jawab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
