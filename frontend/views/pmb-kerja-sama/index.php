<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PmbKerjaSamaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pmb Kerja Samas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-kerja-sama-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pmb Kerja Sama', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kerja_sama',
            'nama_client',
            'deskripsi:ntext',
            'logo',
            'created_at',
            // 'udpated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
