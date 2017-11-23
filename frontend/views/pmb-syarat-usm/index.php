<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PmbSyaratUsmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Syarat Pendaftaran USM ITDEL';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-syarat-usm-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_syarat_usm',
            // 'nama_syarat:ntext',
            // 'id_usm',
            [
                'attribute'=>'id_usm',
                'label' => 'USM',
                'format'=>'raw',
                'value' => function($model){
                    return Html::a($model->idUsm->usm, ['view', 'id'=>$model->id_syarat_usm],['class'=>'btn btn-primary']);
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
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
