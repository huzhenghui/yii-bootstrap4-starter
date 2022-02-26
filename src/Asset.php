<?php

namespace huzhenghui\yii\bootstrap4\starter;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

use yii\bootstrap4\BootstrapAsset;

class Asset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
    public $css = [];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class
    ];
}
