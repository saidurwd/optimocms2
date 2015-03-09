<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Directory */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Directory',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Directories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
