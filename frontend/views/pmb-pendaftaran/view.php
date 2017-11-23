<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbPendaftaran */

$this->title = $model->idUsm->usm;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-pendaftaran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id_pendaftaran',
            [
                'attribute' => 'id_usm',
                'label'     => 'USM',
                'value' => $model->idUsm->usm,
            ],
            [
                'attribute' => 'id_usm',
                'label'  => 'Tahun Masuk',
                'value' => $model->idUsm->idTahun->tahun,
            ],
            'jadwal_awal',
            'jadwal_akhir',
            'biaya_daftar',
            'tgl_pengumuman',
            'tgl_ujian',
            'tgl_mendaftar_ulang_awal',
            'tgl_mendaftar_ulang_akhir',
        ],
    ]) ?>


    <h2>Lokasi Pendaftaran</h2>
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">1. Kampus IT Del</button>
    <div id="demo1" class="collapse">
    <b>Jln. Sisingamangaraja Desa Sitoluama, Kecamatan Laguboti</b><br>
    Pendaftaran dilakukan pada hari Senin – Jumat pukul 08.00 – 17.00
    </div>
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">2. Medan</button>
    <div id="demo2" class="collapse">
    <b>Biro Rektorat Universitas HKBP Nommensen
    Jln. Sutomo No.4A , Medan, Sumatera </b><br>
    
    Pendaftaran dilakukan pada hari Senin – Sabtu pukul 08.00 – 17.00
    </div>
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">3. Kampus</button>
    <div id="demo3" class="collapse">
    <b>Kantor Yayasan Del Pusat : The East Building 2oth Floor – Suite 07, Jln. Lingkar Mega Kuningan E.3.2 No.1 Jakarta Selatan 12950</b><br>
    
    Pendaftaran dilakukan pada hari Senin – Jumat pukul 08.00 – 17.00
    </div>
</div>
