<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbRincianBiaya */

// $this->title = $model->id_rincian_biaya;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Rincian Biayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-rincian-biaya-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if($model!=NULL){
        echo $model->rincian_biaya;
    }?>

</div>
