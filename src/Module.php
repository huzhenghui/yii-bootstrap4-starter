<?php

namespace huzhenghui\yii\bootstrap4\starter;

use Yii;

class Module extends \yii\base\Module implements nav\StarterNavItemsInterface
{
    public $controllerNamespace = 'huzhenghui\yii\bootstrap4\starter\controllers';

    public function init()
    {
        parent::init();
        Yii::setAlias('@huzhenghui/yii/bootstrap4/starter', __DIR__);
    }

    public function getStarterNavItems(): array
    {
        return [
            ['label' => 'Index', 'url' => ['default/index']],
            ['label' => 'Home', 'url' => ['default/home']],
        ];
    }

    public function getLayout(): string
    {
        $layoutPath = $this->getLayoutPath();
        $appAlias = Yii::getAlias('@app');
        if (0 === strpos($layoutPath, $appAlias)) {
            return '@app' . substr($layoutPath, strlen($appAlias)) . '/main';
        }
    }
}
