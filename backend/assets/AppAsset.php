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
        'css/site.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/custom.js',
        // 'js/jquery.min.js',
        'js/moment.min.js',
        'js/moment.min2.js',
        'js/nprogress.js',
        'js/wizard/jquery.smartWizard.js',
        'js/chartjs/chart.min.js',
        'js/icheck/icheck.min.js',
        'js/nicescroll/jquery.nicescroll.min.js',
        'js/progressbar/bootstrap-progressbar.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
