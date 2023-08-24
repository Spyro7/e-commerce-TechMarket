<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use backend\widgets\Footer;
use backend\widgets\LeftBar;
use backend\widgets\TopBar;

use yii\bootstrap5\Html;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100" id="page-top">
<?php $this->beginBody() ?>
<div id="wrapper">
<?=LeftBar::widget() ?>


    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <?=TopBar::widget()?>
            <?=$content?>
        </div>
        <?=Footer::widget()?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
