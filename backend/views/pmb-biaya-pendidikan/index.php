<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PmbBiayaPendidikanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pmb Biaya Pendidikans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-biaya-pendidikan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pmb Biaya Pendidikan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_biaya_pendidikan',
            'deskripsi_biaya:ntext',
            'jumlah_biaya',
            'id_usm',
            'id_prodi',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
