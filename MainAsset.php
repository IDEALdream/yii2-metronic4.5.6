<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/3
 * Time: 9:28
 */

namespace zongpeilei\metronic;

use yii\web\AssetBundle;

/**
 * Layout asset
 * Class MainAsset
 * @package zongpeilei\metronic
 */
class MainAsset extends AssetBundle
{
    /**
     * 当位于vendor下时
     * @var string
     */
    public $sourcePath = '@vendor/zongpeilei/yii2-metronic4.5.6/assets';

    /**
     * layout所依赖css文件
     * @var array
     */
    public $css = [
        'global/css/font.css',
        'global/plugins/font-awesome/css/font-awesome.min.css',
        'global/plugins/simple-line-icons/simple-line-icons.min.css',
        'global/plugins/bootstrap/css/bootstrap.min.css',
        'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'global/plugins/uniform/css/uniform.default.min.css',
        'global/css/components.min.css',
        'global/css/plugins.min.css',
        'layout/css/layout.min.css',
        'layout/css/themes/darkblue.min.css',
        // 自定义css
        'layout/css/custom.css'
    ];

    /**
     * layout所依赖js文件
     * @var array
     */
    public $js = [
        'global/plugins/jquery.min.js',
        'global/plugins/bootstrap/js/bootstrap.min.js',
        'global/plugins/jquery-ui/jquery-ui.min.js',
        'global/plugins/js.cookie.min.js',
        'global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'global/plugins/jquery.blockui.min.js',
        'global/plugins/uniform/jquery.uniform.min.js',
        'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'global/scripts/app.min.js',
        'layout/scripts/demo.min.js',
        'layout/scripts/layout.min.js',
        // 自定义js文件
        'layout/scripts/custom.js'
    ];
}
