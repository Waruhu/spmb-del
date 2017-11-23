<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PmbInfoDelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pmb Info Dels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-info-del-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pmb Info Del', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_info_del',
            'judul_info',
            'deskripsi_del:ntext',
            'created_at',
            'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
