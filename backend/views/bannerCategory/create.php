<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BannerCategory */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Banner Category',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Banner Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
