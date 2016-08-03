<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/3
 * Time: 9:28
 */

namespace zongpeilei\metronic;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zongpeilei/yii2-metronic4.5.6/assets';

    public $css = [
        'global/css/font.css',
        'global/plugins/font-awesome/css/font-awesome.min.css',
        'global/plugins/simple-line-icons/simple-line-icons.min.css',
        'global/plugins/bootstrap/css/bootstrap.min.css',
        'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'global/css/components.min.css',
        'global/css/plugins.min.css',
        'layout/css/layout.min.css',
        'layout/css/themes/darkblue.min.css',
        'layout/css/custom.css'
    ];

    public $js = [
        'global/plugins/jquery.min.js',
        'global/plugins/bootstrap/js/bootstrap.min.js',
        'global/plugins/js.cookie.min.js',
        'global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'global/plugins/jquery.blockui.min.js',
        'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'global/scripts/app.min.js',
        'layout/scripts/layout.min.js',
        'layout/scripts/demo.min.js',
        'layout/global/scripts/quick-sidebar.min.js'
    ];
}
