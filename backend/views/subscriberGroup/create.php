<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SubscriberGroup */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Subscriber Group',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subscriber Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscriber-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
