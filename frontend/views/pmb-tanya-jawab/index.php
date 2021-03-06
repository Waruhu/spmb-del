<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PmbTanyaJawabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pmb Tanya Jawabs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-tanya-jawab-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pmb Tanya Jawab', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tanya_jawab',
            'deskripsi_tanya_jawab:ntext',
            'created_at',
            'updated_at',
            'created_by',
            // 'updated_by',
            // 'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
