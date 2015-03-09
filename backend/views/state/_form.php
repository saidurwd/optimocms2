<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\State */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$form = ActiveForm::begin([
            'options' => ['class' => 'smart-form'],
        ]);
?>
<fieldset>
    <div class="row">
        <section class="col col-6">
            <label class="select">
                <?= $form->field($model, 'country_id')->dropDownList(ArrayHelper::map(\backend\models\Country::find()->all(), 'id', 'country_name'), ['prompt' => 'Select...']); ?>
            </label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="input">
                <?= $form->field($model, 'state_name')->textInput(['maxlength' => 250]) ?>
            </label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="input">
                <?= $form->field($model, 'state_3_code')->textInput(['maxlength' => 3]) ?>
            </label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="input">
                <?= $form->field($model, 'state_2_code')->textInput(['maxlength' => 2]) ?>
            </label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="input">
                <?= $form->field($model, 'ordering')->textInput(['maxlength' => 11]) ?>
            </label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="select">
                <?= $form->field($model, 'status')->dropDownList([1 => 'Enabled', 0 => 'Disabled'], ['prompt' => 'Choose status']); ?>
            </label>
        </section>
    </div>
</fieldset>
<footer>
    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</footer>
<?php ActiveForm::end(); ?>
