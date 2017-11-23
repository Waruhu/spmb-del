<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PmbBiayaPendidikanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pmb Biaya Pendidikans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-biaya-pendidikan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'id_biaya_pendidikan',
            // 'deskripsi_biaya:ntext',
            // 'jumlah_biaya',
            // 'id_usm',
            [
                'attribute'=>'id_usm',
                'label' => 'USM',
                'format'=>'raw',
                'value' => function($model){
                    return Html::a($model->idUsm->usm, ['view', 'id'=>$model->id_biaya_pendidikan],['class'=>'btn btn-primary']);
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
            // 'id_prodi',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
