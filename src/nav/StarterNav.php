<?php

namespace huzhenghui\yii\bootstrap4\starter\nav;

use Yii;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Widget;

class StarterNav extends Widget
{

    private const NAVBAR_CLASS = 'bg-dark navbar navbar-dark navbar-expand-md sticky-top';
    private const NAV_CLASS = 'mr-auto navbar-nav';

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
                'class' => self::NAVBAR_CLASS
            ],
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
        ]);
        echo Nav::widget([
            'options' => [
                'class' => self::NAV_CLASS
            ],
            'items' => $navItems
        ]);
        NavBar::end();
    }
}
