<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PmbPendaftaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Info Pendaftaran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-pendaftaran-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'id_usm',
                'label' => 'USM',
                'value' => function($model){
                    return $model->idUsm->usm;
                }
            ],
            [
                'attribute'=>'id_usm',
                'label' => 'Tahun Masuk',
                'value' => function($model){
                    return $model->idUsm->idTahun->tahun;
                }
            ],
            'jadwal_awal',
            'jadwal_akhir',
            'biaya_daftar',
            'tgl_pengumuman',
            [
                'header' => 'action',
                'format' => 'raw',
                'value' => function($model){
                    return '<div>'.Html::a('Details', ['view', 'id' => $model->id_pendaftaran], ['class' => 'btn btn-primary']).'</div>';
                }
            ],
        ],
    ]); ?>

        
</div>
