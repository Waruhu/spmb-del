<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbSyaratUsm */

$this->title = $model->idUsm->usm;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Syarat Usms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-syarat-usm-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <!--? DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_syarat_usm',
            'nama_syarat:ntext',
            'id_usm',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
            'active',
        ],
    ]) ?-->
    <?= $model->nama_syarat?>

</div>
