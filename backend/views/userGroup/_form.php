<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UserGroup */
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
                <?= $form->field($model, 'title')->textInput(['maxlength' => 150]) ?>
            </label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="textarea textarea-resizable">
                <?= $form->field($model, 'details')->textarea(['rows' => 6]) ?>
            </label>
        </section>
    </div>
</fieldset>
<footer>
    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</footer>
<?php ActiveForm::end(); ?>

