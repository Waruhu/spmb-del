<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PmbRincianBiayaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pmb Rincian Biayas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-rincian-biaya-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'id_usm',
                'label' => 'USM',
                'format'=>'raw',
                'value' => function($model){
                    return $model->idUsm->usm;
                }
            ],
            [
                'attribute'=>'id_usm',
                'label' => 'Tahun Masuk',
                'format'=>'raw',
                'value' => function($model){
                    return $model->idUsm->idTahun->tahun;
                }
            ],
            [
                'attribute'=>'id_prodi',
                'label' => 'Prodi',
                'format'=>'raw',
                'value' => function($model){
                    return $model->idProdi->nama_prodi;
                }
            ],
            'deskripsi_biaya:ntext',
            'jumlah_biaya',
            [
                'attribute' => 'Action',
                'format'=> 'raw',
                'value' =>function($model){
                    return Html::a('Rincian',['pmb-rincian-biaya/view', 'id'=>$model->id_biaya_pendidikan], ['class'=>'btn btn-primary']);
                }
            ],
        
        ],
    ]); ?>
</div>
