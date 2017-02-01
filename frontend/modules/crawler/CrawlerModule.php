<?php

namespace frontend\modules\crawler;

use yii\base\Module;

/**
 * RequestCrawler module definition class
 */
class CrawlerModule extends Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'frontend\modules\crawler\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}