<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Massmail */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Massmail',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Massmails'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="massmail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
