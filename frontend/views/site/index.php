<?php

/* @var $this yii\web\View */

$this->title = 'SPMB';
$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;

use frontend\models\PmbBerita;
use yii\helpers\Html;
use yii\bootstrap\Carousel;
Yii::setAlias('@backend', '/spmb-del/backend');
?>

<div class="intro">
	<hr><hr>
	
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                 <div class="col-lg-12 text-center">
                    <h2>Selamat Datang di <b>Penerimaan Mahasiswa Baru</b>
                    <br>Institut Teknologi Del</h2>
                    <hr class="star-primary">
                  </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>MARTUHAN</h4>
                    </div>
                    <div class="panel-body">
                        <p><b>MARTUHAN:</b>Institut Teknologi Del mengajarkan mahasiswa - mahasiswi untuk lebih dekat dengan Tuhan </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>MARROHA</h4>
                    </div>
                    <div class="panel-body">
                        <p><b>MARROHA:</b> Institut Teknologi Del mengajarkan mahasiswa tidak cukup dengan pintar saja tetapi harus memiliki hati yang tulus</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>MARBISUK</h4>
                    </div>
                    <div class="panel-body">
                        <p><b>MARBISUK: </b> Institut Teknologi Del mengajarkan untuk memiliki kemampuan yang handal, sekaligus harus menjadi manusia yang bijaksana</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        	<div class="col-lg-8">
                <div class="col-lg-10 text-center">
                    <h1><b>Berita dan Informasi</b></h1>
                </div>
                 <hr>
                <?php
                   $model = PmbBerita::find()->orderBy(['id_berita'=>SORT_DESC])->limit(6)->all();
                   
                    foreach ($model as $key => $value) { ?>
                      <div class="col-md-6 portfolio-item">
                        <div class="box">
                          <div class="box-header with-border">
                          </div>
                              <div class="box-body">
                                  <div class="box box-danger">
                                  <?php
                                      $bulan = array(
                                                '01' => 'JANUARI',
                                                '02' => 'FEBRUARI',
                                                '03' => 'MARET',
                                                '04' => 'APRIL',
                                                '05' => 'MEI',
                                                '06' => 'JUNI',
                                                '07' => 'JULI',
                                                '08' => 'AGUSTUS',
                                                '09' => 'SEPTEMBER',
                                                '10' => 'OKTOBER',
                                                '11' => 'NOVEMBER',
                                                '12' => 'DESEMBER',
                                              );
                                    
                                      
                                    echo '<p><img class="img-responsive" src="'.Yii::getAlias('@backend').'/web/upload/berita/'.$value['file_foto'].'" height="10" width="400"></p>';
                                    
                           			echo '<h4 align="justify"><font color="#4a148c">'.$value['judul_berita'].'</h4></font>';
                                    echo '<font color="blue">'."Berita SPMB | ".'</font>';
                                      
                                    echo '<font color="blue">'.date('d',strtotime($value['updated_at'])).' '.($bulan[date('m',strtotime($value['updated_at']))]).' '.date('Y',strtotime($value['updated_at'])).'</font>';

                                    echo $value['deskripsi_singkat'].Html::a('Read more', ['/pmb-berita/view','id' => $value['id_berita']], ['class'=>'btn btn-default']);
                                      
                                  ?>

                              </div>
                              </div >
                              
                             
                        </div>
                      </div>  
                                   

                      <?php }?>

                      
            </div>

            <div class="col-md-4">
        		<div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Pengumuman</h4>
                    </div>
                    <div class="panel-body">
                        <ul>
                        	<li><a href="">Pengumuman 1</a> </li>
                        	<li><a href="">Pengumuman 2</a> </li>
                        	<li><a href="">Pengumuman 3</a> </li>
                        </ul>

                    </div>
                </div>
        	</div>

        	<div class="col-md-4">
        		<div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Daftar Download</h4>
                    </div>
                    <div class="panel-body">
                         <ul>
                        	<li><a href="">Pengumuman 1</a> </li>
                        	<li><a href="">Pengumuman 2</a> </li>
                        	<li><a href="">Pengumuman 3</a> </li>
                        </ul>

                    </div>
                </div>
        	</div>

        	<div class="col-md-4">
        		<div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Forum</h4>
                    </div>
                    <div class="panel-body">
                        <ul>
                        	<li><a href="">Pengumuman 1</a> </li>
                        	<li><a href="">Pengumuman 2</a> </li>
                        	<li><a href="">Pengumuman 3</a> </li>
                        </ul>

                    </div>
                </div>
        	</div>

        </div>



        
        	
        

    </div>

</div>


