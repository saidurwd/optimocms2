<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use backend\widgets\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Content */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php
//    echo DatePicker::widget([
//        'model' => $model,
//        'attribute' => 'created_on',
//            //'language' => 'ru',
//            //'dateFormat' => 'yyyy-MM-dd',
//    ]);
    ?>


    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'category')->textInput() ?>

    <?= $form->field($model, 'details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_on')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'modified_on')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput() ?>

    <?= $form->field($model, 'publish_up')->textInput() ?>

    <?= $form->field($model, 'publish_down')->textInput() ?>

    <?= $form->field($model, 'ordering')->textInput() ?>

    <?= $form->field($model, 'metakey')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'metadesc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hits')->textInput() ?>

    <?= $form->field($model, 'featured')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
