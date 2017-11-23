<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbKerjaSama */

$this->title = $model->id_kerja_sama;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Kerja Samas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-kerja-sama-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kerja_sama], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kerja_sama], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kerja_sama',
            'nama_client',
            'deskripsi:ntext',
            'logo',
            'created_at',
            'udpated_at',
            'created_by',
            'updated_by',
            'active',
        ],
    ]) ?>

</div>
