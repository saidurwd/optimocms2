<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en-us" id="extr-page">
    <head>        
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <!-- #GOOGLE FONT -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">        
    </head>
    <body class="animated fadeInDown">
        <?php $this->beginBody() ?>
        <header id="header">
            <div id="logo-group">
                <span id="logo"> 
                    <?php //Banner::get_site_logo(1); ?> 
                </span>
            </div>            
            <span id="extr-page-header-space"> 
                <span class="hidden-mobile">Finding Frontend?</span> 
                <?= Html::a('FRONTEND', ['/site/index'], ['class' => 'btn btn-danger btn-sm']) ?>                
            </span>
        </header>
        <div id="main" role="main">
            <!-- MAIN CONTENT -->
            <?php echo $content; ?>            
        </div>
        <?php $this->endBody() ?>             
    </body>
</html>
<?php $this->endPage() ?>