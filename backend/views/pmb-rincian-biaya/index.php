<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PmbRincianBiayaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pmb Rincian Biayas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-rincian-biaya-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pmb Rincian Biaya', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_rincian_biaya',
            'id_biaya_pendidikan',
            'rincian_biaya:ntext',
            'created_at',
            'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
