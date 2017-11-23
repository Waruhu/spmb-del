<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbKomentar */

$this->title = $model->id_komentar;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Komentars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-komentar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_komentar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_komentar], [
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
            'id_komentar',
            'deskripsi_komenter:ntext',
            'id_tanya_jawab',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
            'active',
        ],
    ]) ?>

</div>
