<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Directory */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Directory',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Directories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="directory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
