<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\Alert;


$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body data-spy="scroll" data-target="#site-nav">
<?php $this->beginBody() ?>
        <?= $this->render('header.php', ['baseUrl'=>$baseUrl]) ?>
        <?= $content ?>
        <?= $this->render('footer.php', ['baseUrl'=>$baseUrl]) ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
