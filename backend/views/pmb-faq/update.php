<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbFaq */

$this->title = 'Update Pmb Faq: ' . $model->id_faq;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Faqs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_faq, 'url' => ['view', 'id' => $model->id_faq]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-faq-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
