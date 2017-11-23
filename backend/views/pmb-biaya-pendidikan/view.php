<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbBiayaPendidikan */

$this->title = $model->id_biaya_pendidikan;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Biaya Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-biaya-pendidikan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_biaya_pendidikan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_biaya_pendidikan], [
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
            // 'id_biaya_pendidikan',
            'deskripsi_biaya:ntext',
            'jumlah_biaya',
            [
                'attribute' => 'id_usm',
                'format' => 'raw',
                'label' => 'USM',
                'value' => $model->idUsm->usm,
            ],
            [
                'attribute' => 'id_prodi',
                'format' => 'raw',
                'label' => 'Prodi',
                'value' => $model->idProdi->nama_prodi,
            ],
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',
        ],
    ]) ?>

    <h2>Rincian Biaya</h2>
    <center>Penjelasan Cara Pembayaran Biaya Pendidikan IT Del </center>
    <?= $modelRincianBiaya->rincian_biaya?>

</div>
