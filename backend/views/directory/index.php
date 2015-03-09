<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Directories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directory-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Directory',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category',
            'title',
            'email:email',
            'mobile',
            // 'telephone',
            // 'fax',
            // 'website',
            // 'address',
            // 'country',
            // 'state',
            // 'city',
            // 'district',
            // 'thana',
            // 'postcode',
            // 'details:ntext',
            // 'created_on',
            // 'created_by',
            // 'modified_on',
            // 'modified_by',
            // 'hits',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
