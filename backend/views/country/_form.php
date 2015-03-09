<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Country */
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
            <label class="input">
                <?= $form->field($model, 'country_name')->textInput(['maxlength' => 255]) ?>
            </label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="input">
                <?= $form->field($model, 'country_3_code')->textInput(['maxlength' => 3]) ?>
            </label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="input">
                <?= $form->field($model, 'country_2_code')->textInput(['maxlength' => 2]) ?>
            </label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="input">
                <?= $form->field($model, 'worldzone_id')->textInput(['maxlength' => 50]) ?>
            </label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="input">
                <?= $form->field($model, 'ordering')->textInput(['maxlength' => 3]) ?>
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