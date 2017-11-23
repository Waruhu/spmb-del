<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PmbKomentar */

$this->title = 'Create Pmb Komentar';
$this->params['breadcrumbs'][] = ['label' => 'Pmb Komentars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-komentar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
