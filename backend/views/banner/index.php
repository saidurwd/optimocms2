<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Banners');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Banner',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category',
            'title',
            'image',
            'clickurl:url',
            // 'details:ntext',
            // 'status',
            // 'sticky',
            // 'ordering',
            // 'created_on',
            // 'created_by',
            // 'publish_up',
            // 'publish_down',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
