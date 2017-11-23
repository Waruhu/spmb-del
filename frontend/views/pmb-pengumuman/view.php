<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbPengumuman */

$this->title = $model->judul_pengumuman;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Pengumumen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-pengumuman-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <H3><?=$model->judul_pengumuman?></H3>
    <?=$model->deskripsi_pengumuman?>
    

    <br>
    <p>File Pengumuman</p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_pengumuman',
            'file_pengumuman',
            // 'deskripsi_pengumuman:ntext',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
