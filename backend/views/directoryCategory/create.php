<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DirectoryCategory */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Directory Category',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Directory Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directory-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
