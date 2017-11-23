<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbSyaratUsm */

$this->title = $model->id_syarat_usm;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Syarat Usms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-syarat-usm-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_syarat_usm], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_syarat_usm], [
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
            // 'id_syarat_usm',
            'nama_syarat:ntext',
            [
                'attribute'=>'id_usm',
                'label'=>'USM',
                'value'=>function($model){
                    return $model->idUsm->usm;
                }
            ],
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',
        ],
    ]) ?>

</div>
