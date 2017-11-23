<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbBerita */

$this->title = $model->id_berita;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-berita-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_berita], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_berita], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_berita',
            'judul_berita',
            'deskripsi_singkat:ntext',
            'deskripsi_all:ntext',
            [
                'attribute' => 'Gambar Berita',
                'format' => 'raw',
                'value' => function ($model) {
                if ($model->file_foto!='')
                  return '<img src="'.Yii::getAlias('@web'). '/upload/berita/'.$model->file_foto.'" width="100px" height="auto">'; else return 'no image';
                },
            ],

            /*'file_foto',*/
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',
        ],
    ]) ?>

</div>
