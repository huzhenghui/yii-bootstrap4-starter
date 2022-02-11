<?php

namespace huzhenghui\yii\bootstrap4\starter\nav;

use Yii;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Widget;

class StarterNav extends Widget
{
    public function run()
    {
        $navItems = array();
        foreach (Yii::$app->getModules(true) as $module) {
            if ($module instanceof StarterNavItemsInterface) {
                foreach ($module->getStarterNavItems() as $navItem) {
                    $navItems[] = $navItem;
                }
            }
        }
        NavBar::begin([
            'options' => [
                'class' => 'navbar-expand-md navbar-dark bg-dark fixed-top'
            ],
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
        ]);
        echo Nav::widget([
            'options' => [
                'class' => 'navbar-nav'
            ],
            'items' => $navItems
        ]);
        NavBar::end();
    }
}
