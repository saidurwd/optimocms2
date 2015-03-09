<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserGroup */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
            'modelClass' => 'User Group',
        ]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-user fa-fw "></i> 
            <?= Html::encode($this->title) ?>
            <span>>
                Edit
            </span>
        </h1>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right">   
        <?php echo Html::a('<span class="btn-label"><i class="fa fa-home"></i></span>Manage', ['index'], ['class' => 'btn btn-labeled btn-primary']); ?>
        <?php echo Html::a('<span class="btn-label"><i class="fa fa-plus"></i></span>New', ['create'], ['class' => 'btn btn-labeled btn-primary']); ?>
        <?php echo Html::a('<span class="btn-label"><i class="fa fa-external-link-square"></i></span>Details', ['view', 'id' => $model->id], ['class' => 'btn btn-labeled btn-primary']); ?>
    </div>
</div>
<!-- widget grid -->
<section id="widget-grid" class="">
    <!-- row -->
    <div class="row">
        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
                <header>
                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                    <h2><?= Html::encode($this->title) ?></h2>
                </header>
                <!-- widget div-->
                <div>
                    <!-- widget content -->
                    <div class="widget-body no-padding">
                        <?=
                        $this->render('_form', [
                            'model' => $model,
                        ])
                        ?>
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget div -->
            </div>
            <!-- end widget -->
        </article>
        <!-- WIDGET END -->
    </div>
    <!-- end row -->
</section>
<!-- end widget grid -->