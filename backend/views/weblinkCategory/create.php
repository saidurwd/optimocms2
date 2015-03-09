<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WeblinkCategory */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Weblink Category',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Weblink Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weblink-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
