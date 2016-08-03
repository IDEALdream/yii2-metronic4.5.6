<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/3
 * Time: 9:25
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use zongpeilei\metronic\MainAsset;
use zongpeilei\metronic\widgets\Breadcrumbs;
use zongpeilei\metronic\widgets\Menu;

$mainAsset = MainAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <?php $this->beginBody() ?>
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <div class="page-logo">
                <a href="#">
                    <?= Html::img($mainAsset->baseUrl.'/layout/img/logo.png', ['alt' => 'logo', 'class' => 'logo-default']); ?>
                </a>
                <div class="menu-toggler sidebar-toggler">
                    <span></span>
                </div>
            </div>
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <?= Html::img($mainAsset->baseUrl.'/layout/img/avatar3_small.jpg', ['alt' => '', 'class' => 'img-circle']); ?>
                            <span class="username username-hide-on-mobile"> Nick </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="#">
                                    <i class="icon-key"></i> 注销
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="page-container">
        <!-- sidebar -->
        <?= Menu::widget([
            'visible' => true,
            'items' => isset(Yii::$app->controller->menu) ? Yii::$app->controller->menu : [],
        ]); ?>

        <!-- content -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                </div>
                <div class="row">
                    <?= $content; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="page-footer">
        <div class="page-footer-inner">
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
