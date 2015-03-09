<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.min.css',
        'css/smartadmin-production.min.css',
        'css/smartadmin-skins.min.css',
        'css/demo.min.css',
        'css/styles.css',        
    ];
    public $js = [
        'js/libs/jquery-ui-1.10.3.min.js',
        'js/app.config.js',
        'js/plugin/jquery-touch/jquery.ui.touch-punch.min.js',
        'js/bootstrap/bootstrap.min.js',
        'js/notification/SmartNotification.min.js',
        'js/smartwidgets/jarvis.widget.min.js',
        'js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js',
        'js/plugin/sparkline/jquery.sparkline.min.js',
        'js/plugin/jquery-validate/jquery.validate.min.js',
        'js/plugin/masked-input/jquery.maskedinput.min.js',
        'js/plugin/select2/select2.min.js',
        'js/plugin/bootstrap-slider/bootstrap-slider.min.js',
        'js/plugin/msie-fix/jquery.mb.browser.min.js',
        'js/plugin/fastclick/fastclick.min.js',
        'js/demo.min.js',
        'js/app.min.js',
        'js/speech/voicecommand.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
