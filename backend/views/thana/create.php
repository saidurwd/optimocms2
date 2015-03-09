<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Thana */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Thana',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Thanas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thana-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
