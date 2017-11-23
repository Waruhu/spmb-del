<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PmbGalerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galeries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-galery-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Galery', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_foto',
            'file_foto',
            'deskripsi:ntext',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
