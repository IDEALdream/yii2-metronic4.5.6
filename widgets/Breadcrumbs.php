<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/3
 * Time: 15:43
 */

namespace zongpeilei\metronic\widgets;

use Yii;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs as BaseBreadcrumbs;

class Breadcrumbs extends BaseBreadcrumbs
{
    public $options = ['class' => 'page-breadcrumb'];

    public $itemTemplate = "<li>{link}<i class=\"fa fa-circle\"></i></li>\n";

    public $activeItemTemplate = "<li><span>{link}</span></li>\n";

    public function run()
    {
        if (empty($this->links)) {
            return;
        }
        $links = [];
        if ($this->homeLink === null) {
            $links[] = $this->renderItem([
                'label' => Yii::t('yii', '首页'),
                'url' => Yii::$app->homeUrl,
            ], $this->itemTemplate);
        } elseif ($this->homeLink !== false) {
            $links[] = $this->renderItem($this->homeLink, $this->itemTemplate);
        }
        foreach ($this->links as $link) {
            if (!is_array($link)) {
                $link = ['label' => $link];
            }
            $links[] = $this->renderItem($link, isset($link['url']) ? $this->itemTemplate : $this->activeItemTemplate);
        }
        echo Html::tag($this->tag, implode('', $links), $this->options);
    }
}
