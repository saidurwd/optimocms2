<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DirectoryCategory */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Directory Category',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Directory Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="directory-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
