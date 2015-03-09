<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DirectoryCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="directory-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parent')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
