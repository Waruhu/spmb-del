<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PmbUsmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Biaya USM';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-usm-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_usm',
            [
                'attribute' => 'usm',
                'format'=> 'raw',
                'value' =>function($model){
                    return Html::a($model->usm,['pmb-rincian-biaya/biaya', 'id'=>$model->id_usm], ['class'=>'btn btn-primary']);
                }
            ],
            [
                'attribute' => 'id_tahun',
                'label' => 'Tahun masuk',
                'value' =>function($model){
                    return $model->idTahun->tahun;
                }
            ],
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
