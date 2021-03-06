<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Directory */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Directories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category',
            'title',
            'email:email',
            'mobile',
            'telephone',
            'fax',
            'website',
            'address',
            'country',
            'state',
            'city',
            'district',
            'thana',
            'postcode',
            'details:ntext',
            'created_on',
            'created_by',
            'modified_on',
            'modified_by',
            'hits',
            'status',
        ],
    ]) ?>

</div>
