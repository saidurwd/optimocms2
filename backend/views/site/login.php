<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Sign in';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content" class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
            <?php //User::get_alert_message();  ?>
            <h1 class="txt-color-red login-header-big">MAKE WISER SPENDING DECISIONS</h1>
            <div class="hero">
                <div class="pull-left login-desc-box-l">
                    <h4 class="paragraph-header"> helps you see all your accounts at one place, understand where your money goes, reduce unwanted spending, and save for future goals.</h4>
                    <div class="login-app-icons">
                        <?= Html::a('FRONTEND', ['/site/index'], ['class' => 'btn btn-danger btn-lg']) ?>
                    </div>
                </div>
                <img src="<?php echo \Yii::$app->request->BaseUrl; ?>/img/demo/iphoneview.png" class="pull-right display-image" alt="" style="width:210px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
            <div class="well no-padding">
                <?php
                $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'enableClientValidation' => true,
                            'options' => array(
                                'class' => 'smart-form client-form',
                            ),
                ]);
                ?>
                <header>
                    <?= Html::encode($this->title) ?>
                </header>
                <fieldset>
                    <div class="row">
                        <section class="col col-12">
                            <?php //echo $form->errorSummary($model, '<i class="fa fa-bell text-danger"></i> Please fix the following input errors:', '', array('class' => 'text-danger', 'style' => 'padding-left:20px;'));  ?>
                        </section>
                    </div>
                    <section>
                        <label class="label">E-mail</label>
                        <label class="input"> <i class="icon-append fa fa-user"></i>
                            <?= $form->field($model, 'username', ['template' => "{input}\n{error}"])->textInput(array('placeholder' => 'Username/E-mail')); ?>
                            <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
                    </section>
                    <section>
                        <label class="label">Password</label>
                        <label class="input"> <i class="icon-append fa fa-lock"></i>
                            <?= $form->field($model, 'password', ['template' => "{input}\n{error}"])->passwordInput(array('placeholder' => 'Password')); ?>
                            <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
                        <div class="note">
                            <?= Html::a('Forgot password?', ['/recovery/recovery'], ['class' => '']) ?>
                        </div>
                    </section>
                    <section>        
                        <label class="checkbox">
                            <?= $form->field($model, 'rememberMe', ['template' => "{input}"])->checkbox(array('checked' => 'checked')) ?>
                            <i></i></label>
                    </section>
                </fieldset>
                <footer>
                    <?= Html::submitButton(Html::encode($this->title), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </footer>
                <?php ActiveForm::end(); ?>
            </div>
            <h5 class="text-center"> - Or sign in using -</h5>
            <ul class="list-inline text-center">
                <li>
                    <a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
                </li>
            </ul>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-12">
                    <span class="">Copyright &copy; <?= date('Y'); ?>. <?= Yii::powered() ?></span>
                </div>
            </div>	
        </div>        
    </div>
</div>