<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PmbPendaftaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Info Pendaftaran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-pendaftaran-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Info USM', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_pendaftaran',
            [
                'attribute'=>'id_usm',
                'label'=>'USM',
                'value'=>function($model){
                    return $model->idUsm->usm;
                }
            ],
            [
                'attribute'=>'id_usm',
                'label'=>'Tahun',
                'value'=>function($model){
                    return $model->idUsm->idTahun->tahun;
                }
            ],
            'jadwal_awal',
            'jadwal_akhir',
            'biaya_daftar',
            'tgl_pengumuman',
            // 'tgl_ujian',
            // 'tgl_mendaftar_ulang',
            // 'id_usm',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
