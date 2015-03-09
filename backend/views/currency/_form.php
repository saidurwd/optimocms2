<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Currency */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="currency-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'currency_name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'currency_code_2')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'currency_code_3')->textInput(['maxlength' => 3]) ?>

    <?= $form->field($model, 'currency_numeric_code')->textInput() ?>

    <?= $form->field($model, 'currency_exchange_rate')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'currency_symbol')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'currency_decimal_place')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'currency_decimal_symbol')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'currency_thousands')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'ordering')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
