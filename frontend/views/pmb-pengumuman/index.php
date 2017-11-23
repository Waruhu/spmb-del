<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PmbPengumumanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengumuman SPMB';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-pengumuman-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_pengumuman',
            'judul_pengumuman',
            // 'deskripsi_pengumuman:ntext',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',

            // ['class' => 'yii\grid\ActionColumn'],
            [
                'attribute' => 'Action',
                'format'=> 'raw',
                'value' =>function($model){
                    return Html::a('View',['pmb-pengumuman/view', 'id'=>$model->id_pengumuman], ['class'=>'btn btn-primary']);
                }
            ],
        ],
    ]); ?>
</div>
