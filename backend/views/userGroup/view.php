<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\UserGroup */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-user fa-fw "></i> 
            <?= Html::encode($this->title) ?>
            <span>>
                Details
            </span>
        </h1>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right">   
        <?php echo Html::a('<span class="btn-label"><i class="fa fa-home"></i></span>Manage', ['index'], ['class' => 'btn btn-labeled btn-primary']); ?>
        <?php echo Html::a('<span class="btn-label"><i class="fa fa-plus"></i></span>New', ['create'], ['class' => 'btn btn-labeled btn-primary']); ?>
        <?php echo Html::a('<span class="btn-label"><i class="fa fa-pencil"></i></span>Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-labeled btn-primary']); ?>
        <?php echo Html::a('<span class="btn-label"><i class="fa fa-trash-o"></i></span>Delete', ['delete', 'id' => $model->id], ['class' => 'btn btn-labeled btn-danger', 'data' => ['confirm' => Yii::t('app', 'Are you sure you want to delete this item?'), 'method' => 'post',],]); ?>
    </div>
</div>
<!-- Widget ID (each widget will need unique ID)-->
<div class="jarviswidget" id="wid-id-11" data-widget-colorbutton="false" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false">
    <header>
        <h2><?= Html::encode($this->title) ?></h2>	
        <ul id="widget-tab-1" class="nav nav-tabs pull-right">
            <li class="active"><a data-toggle="tab" href="#tab1"><i class="fa fa-lg fa-home"></i> Home</a></li>           
        </ul>	
    </header>
    <!-- widget div-->
    <div>
        <!-- widget edit box -->
        <div class="jarviswidget-editbox">
            <!-- This area used as dropdown edit box -->
        </div>
        <!-- end widget edit box -->
        <!-- widget content -->
        <div class="widget-body no-padding">
            <!-- widget body text-->
            <div class="tab-content padding-10">
                <div class="tab-pane fade in active" id="tab1">
                    <?=
                    DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id',
                            'title',
                            'details:ntext',
                        ],
                    ])
                    ?>
                </div>
            </div>
            <!-- end widget body text-->
        </div>
        <!-- end widget content -->
    </div>
    <!-- end widget div -->
</div>
<!-- end widget -->